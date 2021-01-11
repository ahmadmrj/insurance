<?php

namespace App\Services;

use App\Models\Forms;
use App\Models\FormsData;

class FormService 
{
    protected $model;

    public function __construct(Forms $model)
    {
        $this->model = $model;
    }

    public function save(Array $formData)
    {
        $userId = $this->generateId();

        foreach ($formData as $key => $val) {
            if (preg_match('/[0-9]+$/', $key, $match)) {
                $data[] = [
                    'form_id' => $match[0],
                    'user_id' => $userId,
                    'value'   => json_encode($val),
                    'created_at' => new \DateTime()
                ];
            }
        }

        if (isset($data)) {
            FormsData::insert($data);
        }

        return $formData;
    }

    public function getFormByName($name)
    {
        $formFields = [];
        $result     = $this->model->newQuery()->where('template', $name)->get();

        foreach ($result as $field) {
            $field->name            = $field->template . '_' . $field->id;
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
