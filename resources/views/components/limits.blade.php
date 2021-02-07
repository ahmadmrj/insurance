<div class="form-group row">
    <div class="col-sm">
        <?php $ol = json_decode($fields[54]->values); ?>
        <label>Auto Liability</label>
        <select name="{{$fields[54]->name}}" class="form-select">
            @foreach ($ol as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $reefer = json_decode($fields[55]->values); ?>
        <label>{{$fields[55]->alias}}</label>
        <select name="{{$fields[55]->name}}" class="form-select">
            @foreach ($reefer as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $um = json_decode($fields[56]->values); ?>
        <label>{{$fields[56]->alias}}</label>
        <select name="{{$fields[56]->name}}" class="form-select">
            @foreach ($um as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $cargo = json_decode($fields[57]->values); ?>
        <label>{{$fields[57]->alias}}</label>
        <select name="{{$fields[57]->name}}" class="form-select">
            @foreach ($cargo as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $cd = json_decode($fields[68]->values); ?>
        <label>{{$fields[68]->alias}}</label>
        <select name="{{$fields[68]->name}}" class="form-select">
            @foreach ($cd as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <?php $mp = json_decode($fields[58]->values); ?>
        <label>{{$fields[58]->alias}}</label>
        <select name="{{$fields[58]->name}}" class="form-select">
            @foreach ($cd as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $ti = json_decode($fields[59]->values); ?>
        <label>{{$fields[59]->alias}}</label>
        <select name="{{$fields[59]->name}}" class="form-select">
            @foreach ($ti as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $gl = json_decode($fields[60]->values); ?>
        <label>{{$fields[60]->alias}}</label>
        <select name="{{$fields[60]->name}}" class="form-select">
            @foreach ($gl as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $gl = json_decode($fields[69]->values); ?>
        <label>{{$fields[69]->alias}}</label>
        <select name="{{$fields[69]->name}}" class="form-select">
            @foreach ($gl as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $gk = json_decode($fields[61]->values); ?>
        <label>{{$fields[61]->alias}}</label>
        <select name="{{$fields[61]->name}}" class="form-select">
            @foreach ($gk as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>
