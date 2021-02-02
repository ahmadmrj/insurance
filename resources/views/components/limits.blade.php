<div class="form-group row">
    <div class="col-sm">
        <label>LIABILITY</label>
        <input name="{{$fields[54]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <?php $reefer = json_decode($fields[55]->values); ?>
        <label>{{$fields[55]->alias}}</label>
        <select name="{{$fields[55]->name}}" class="form-select" required>
            @foreach ($reefer as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $um = json_decode($fields[56]->values); ?>
        <label>{{$fields[56]->alias}}</label>
        <select name="{{$fields[56]->name}}" class="form-select" required>
            @foreach ($um as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <?php $cargo = json_decode($fields[57]->values); ?>
        <label>{{$fields[57]->alias}}</label>
        <select name="{{$fields[57]->name}}" class="form-select" required>
            @foreach ($cargo as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[58]->alias}}</label>
        <input name="{{$fields[58]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[59]->alias}}</label>
        <input name="{{$fields[59]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[60]->alias}}</label>
        <input name="{{$fields[60]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[61]->alias}}</label>
        <input name="{{$fields[61]->name}}" type="text" class="form-control" />
    </div>
</div>
