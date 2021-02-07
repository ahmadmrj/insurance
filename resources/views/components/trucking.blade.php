<?php
$typeOptions = json_decode($fields[1]->values, true);
?>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[1]->alias}}</label>
        <input name="{{$fields[1]->name}}" type="text" class="form-control" minlength="5" maxlength="5" />
    </div>
    <div class="col-sm">
        <label>{{$fields[2]->alias}}</label>
        <input name="{{$fields[2]->name}}" type="text" class="form-control" required />
    </div>
    <div class="col-sm">
        <label>{{$fields[4]->alias}}</label>
        <input name="{{$fields[4]->name}}" type="text" class="form-control" required />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[5]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-envelope"></i></span>
            <input name="{{$fields[5]->name}}" type="email" class="form-control" required />
        </div>
    </div>
    <div class="col-sm">
        <label>{{$fields[6]->alias}}</label>
        <div class="input-group">
            <input name="{{$fields[6]->name}}" type="text" class="form-control date" autocomplete="off" data-provide="datepicker" />
            <span class="input-group-text"><i class="bi-calendar-date"></i></span>
        </div>
    </div>
    <div class="col-sm">
        <label>{{$fields[7]->alias}}</label>
        <div class="input-group">
            <input name="{{$fields[7]->name}}" type="text" class="form-control date" autocomplete="off" data-provide="datepicker" />
            <span class="input-group-text"><i class="bi-calendar-date"></i></span>
        </div>
    </div>
</div>