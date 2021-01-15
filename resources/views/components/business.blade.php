<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[31]->alias}}</label>
        <select name="{{$fields[31]->name}}" class="form-select">
            @foreach (json_decode($fields[31]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[32]->alias}}</label>
        <select name="{{$fields[32]->name}}" class="form-select">
            @foreach (json_decode($fields[32]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[33]->alias}}</label>
        <div class="input-group">
            <input name="{{$fields[33]->name}}" type="number" class="form-control" />
            <span class="input-group-text">USD</span>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[34]->alias}}</label>
        <select name="{{$fields[34]->name}}" class="form-select">
            @foreach (json_decode($fields[34]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[35]->alias}}</label>
        <select name="{{$fields[35]->name}}" class="form-select">
            @foreach (json_decode($fields[35]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[36]->alias}}</label>
        <select name="{{$fields[36]->name}}" class="form-select">
            @foreach (json_decode($fields[36]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
</div>