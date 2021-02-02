<?php
    $establishYears = ['New Venture'];
    $currentDate = date('Y');
    for ($i = $currentDate; $i > ($currentDate - 40); $i --) {
        $establishYears[] = $i;
    }
?>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[8]->alias}}</label>
        <input name="{{$fields[8]->name}}" type="text" class="form-control" required />
    </div>
    <div class="col-sm">
        <label>{{$fields[9]->alias}}</label>
        <input name="{{$fields[9]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[10]->alias}}</label>
        <input name="{{$fields[10]->name}}" type="text" class="form-control" required />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[12]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-telephone"></i></span>
            <input name="{{$fields[12]->name}}" type="text" class="form-control phone_us" placeholder="e.g (424) 542 2220" required />
        </div>
    </div>
    <div class="col-sm">
        <label>{{$fields[13]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-envelope"></i></span>
            <input name="{{$fields[13]->name}}" type="email" class="form-control" required />
        </div>
    </div>    
</div>

<div class="form-group row">
    <div class="col-4">
        <label>{{$fields[11]->alias}}</label>
        <input name="{{$fields[11]->name}}" type="text" class="form-control" required />
    </div> 
    <div class="col-2">
        <label>{{$fields[14]->alias}}</label>
        <select name="{{$fields[14]->name}}" class="form-select" required>
            @foreach ($establishYears as $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-3">
        <label>{{$fields[19]->alias}}</label>
        <input name="{{$fields[19]->name}}" type="text" class="form-control" maxlength="10" required />
    </div> 
    <div class="col-3">
        <label>{{$fields[18]->alias}}</label>
        <input name="{{$fields[18]->name}}" type="text" class="form-control" required />
    </div> 
</div>

<div class="form-group row">
    <div class="col-sm">
        <?php $operations = json_decode($fields[15]->values); ?>
        <label>{{$fields[15]->alias}}</label>
        <select name="{{$fields[15]->name}}" class="form-select" required>
            @foreach ($operations as $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div> 
    <div class="col-sm">
        <label>{{$fields[16]->alias}}</label>
        <select name="{{$fields[16]->name}}" class="form-select">
            @foreach ($states as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[17]->alias}}</label>
        <input name="{{$fields[17]->name}}" type="text" class="form-control" required />
    </div> 
</div>

<div class="form-group row">
    <div class="col-6">
        <label>{{$fields[22]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-signpost-2"></i></span>
            <input name="{{$fields[22]->name}}" type="text" class="form-control" placeholder="mailing address" />
        </div>
    </div>
    <div class="col-2">
        <label>{{$fields[20]->alias}}</label>
        <select name="{{$fields[20]->name}}" class="form-select">
            @foreach ($states as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <label>{{$fields[21]->alias}}</label>
        <input name="{{$fields[21]->name}}" type="city" class="form-control" />
    </div>
    <div class="col-2">
        <label>{{$fields[23]->alias}}</label>
        <input name="{{$fields[23]->name}}" type="number" class="form-control" />
    </div>
</div>
<div class="form-group row">
    <div class="col-6">
        <label>{{$fields[26]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-signpost-2"></i></span>
            <input name="{{$fields[26]->name}}" type="text" class="form-control" placeholder="physical/garaging address" />
        </div>
    </div>
    <div class="col-2">
        <label>{{$fields[24]->alias}}</label>
        <select name="{{$fields[24]->name}}" class="form-select">
            @foreach ($states as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <label>{{$fields[25]->alias}}</label>
        <input name="{{$fields[25]->name}}" type="city" class="form-control" />
    </div>
    <div class="col-2">
        <label>{{$fields[27]->alias}}</label>
        <input name="{{$fields[27]->name}}" type="number" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-10">
        <label>{{$fields[28]->alias}}</label>
        <input name="{{$fields[28]->name}}" type="text" class="form-control" required />
    </div>

    <?php $radius = json_decode($fields[29]->values); ?>

    <div class="col-2">
        <label>{{$fields[29]->alias}}</label>
        <select name="{{$fields[29]->name}}" class="form-select">
            @foreach ($radius as $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[44]->alias}}</label>
        <input name="{{$fields[44]->name}}" type="text" class="form-control" required />
    </div>
</div>