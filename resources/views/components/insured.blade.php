<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[9]->alias}}</label>
        <input name="{{$fields[9]->name}}" type="text" class="form-control" required />
    </div>
    <div class="col-sm">
        <label>{{$fields[10]->alias}}</label>
        <input name="{{$fields[10]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[11]->alias}}</label>
        <input name="{{$fields[11]->name}}" type="text" class="form-control" required />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[12]->alias}}</label>
        <input name="{{$fields[12]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[13]->alias}}</label>
        <input name="{{$fields[13]->name}}" type="text" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[14]->alias}}</label>
        <input name="{{$fields[14]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[15]->alias}}</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi-signpost-2"></i></span>
            <input name="{{$fields[15]->name}}" type="text" class="form-control" />
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[16]->alias}}</label>
        <select name="{{$fields[16]->name}}" class="form-select">
            @foreach (json_decode($fields[16]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[17]->alias}}</label>
        <input name="{{$fields[17]->name}}" type="number" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[18]->alias}}</label>
        <select name="{{$fields[18]->name}}" class="form-select">
            @foreach (json_decode($fields[18]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[19]->alias}}</label>
        <select name="{{$fields[19]->name}}" class="form-select">
            @foreach (json_decode($fields[19]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>