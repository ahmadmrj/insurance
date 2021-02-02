<?php
$radiusOfOperation = json_decode($fields[28]->values, true);
?>
<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[20]->alias}}</label>
        <input name="{{$fields[20]->name}}" type="number" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[21]->alias}}</label>
        <input name="{{$fields[21]->name}}" type="number" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[22]->alias}}</label>
        <input name="{{$fields[22]->name}}" type="number" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[23]->alias}}</label>
        <input name="{{$fields[23]->name}}" type="number" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[24]->alias}}</label>
        <input name="{{$fields[24]->name}}" type="number" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[25]->alias}}</label>
        <input type="text" name="{{$fields[25]->name}}" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[26]->alias}}</label>
        <input type="text" name="{{$fields[26]->name}}" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[27]->alias}}</label>
        <select name="{{$fields[27]->name}}" class="form-select">
            @foreach ($yearsInBusiness as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[28]->alias}}</label>
        <select name="{{$fields[28]->name}}" class="form-select">
            @foreach ($radiusOfOperation as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>

