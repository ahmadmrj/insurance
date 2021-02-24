<?php

namespace App\Services;

use App\Models\Forms;
use App\Models\FormsData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormService 
{
    protected $model;

    public function __construct(Forms $model)
    {
        $this->model = $model;
    }

    public function save(Request $request)
    {
        $userId            = $this->generateId();
        $createdAt         = new \DateTime();
        $driversAttachment = $this->getAttachments('driver', $request);
        $row               = array_values($request->all())[1];

        foreach ($row as $key => $item) {
            if (is_array($item)) {
                $item = array_values($item)[0];
                foreach ($item as $val) {
                    // if is attachment
                    if($key == 71) {
                        $path = $val->store('drivers');
                        $val = $path;
                    }

                    $data[] = [
                        'form_id'    => $key,
                        'user_id'    => $userId,
                        'value'      => json_encode($val),
                        'created_at' => $createdAt
                    ];        
                }
                continue;
            }

            $data[] = [
                'form_id'    => $key,
                'user_id'    => $userId,
                'value'      => json_encode($item),
                'created_at' => $createdAt
            ];
        }

        // foreach ($driversAttachment as $attachment) {
        //     $path = $attachment->store('drivers');
        //     dd($path);
        // }

        if (isset($data)) {
            if ($model = FormsData::insert($data)) {
                return $userId;
            }
        }

        return false;
    }

    private function getAttachments($key, Request $request)
    {
        $attachments = $request->file('trucking_quick_quote');

        foreach ($attachments as $attachment) {
            if (isset($attachment[$key])) {
                return $attachment[$key];
            }
        }

        return [];
    }

    public function getFormByName($name)
    {
        $formFields = [];
        $result     = $this->model->newQuery()->where('template', $name)->get();

        foreach ($result as $field) {
            $field->name            = $field->template . '[' . $field->id . ']';
            $field->name            .= $field->multiple ? '[' . $field->group_id . '][]' : ''; 
            $formFields[$field->id] = $field;
        }

        return $formFields;
    }

    private function generateId()
    {
        list($msec, $sec) = explode(' ', microtime());

        $msec = intval($msec * 1000);
        $uid  = intval(1 % 1024);
        $sec  = time();
        $sec  = $sec - strtotime('2000-01-01 00:00:00');

        $sid   = str_pad(base_convert($sec, 10, 2), 31, '0', STR_PAD_LEFT);
        $mid   = str_pad(base_convert($msec, 10, 2), 10, '0', STR_PAD_LEFT);
        $shard = str_pad(base_convert(1, 10, 2), 13, '0', STR_PAD_LEFT);
        $uid   = str_pad(base_convert(1, 10, 2), 10, '0', STR_PAD_LEFT);
        $id    = $sid . $mid . '11';

        $number = gmp_init($id, 2);

        return gmp_strval($number, 10);
    }
}
