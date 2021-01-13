<?php

namespace App\Services;

use App\Models\FormsData;

class FormDataService 
{
    protected $model;

    public function __construct(FormsData $model)
    {
        $this->model = $model;
    }

    public function getByUserId($userId)
    {
        $data  = [];
        $entry = $this->model->newQuery()
                    ->join('forms', 'form_id', '=', 'forms.id')
                    ->select('forms_data.*', 'forms.group_id', 'forms.multiple')
                    ->where('user_id', $userId)->get();

        foreach ($entry as $row) {
            $row->value = json_decode($row->value);
            if ($row->multiple) {
                $data[$row->group_id][$row->form_id][] = $row;
                continue;
            }
            $data[$row->form_id] = $row;
        }

        return $data;
    }
}
