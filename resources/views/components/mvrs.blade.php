<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[29]->alias}}</label>
        <select name="{{$fields[29]->name}}" class="form-select">
            @foreach (json_decode($fields[29]->values, true) as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[30]->alias}}</label>
        <input type="number" name="{{$fields[30]->name}}" class="form-control" />
    </div>
</div>