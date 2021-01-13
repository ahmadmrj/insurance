<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[29]->alias}}</label>
        <select name="{{$fields[29]->name}}" class="form-select">
            @foreach (json_decode($fields[29]->values, true) as $key => $val)
            <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
    </div>
</div>

<div class="subsection items">
    <p class="title">DRIVERS <button type="button" class="btn btn-success btn-xsm add_item">Add</button></p>
    <div class="form-group row item">
        <div class="col-sm">
            <label>{{$fields[42]->alias}}</label>
            <input name="{{$fields[42]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[43]->alias}}</label>
            <input name="{{$fields[43]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[44]->alias}}</label>
            <input name="{{$fields[44]->name}}" type="text" class="form-control" data-provide="datepicker" />
        </div>
        <div class="col-sm">
            <label>{{$fields[45]->alias}}</label>
            <input name="{{$fields[45]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[46]->alias}}</label>
            <input name="{{$fields[46]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[47]->alias}}</label>
            <select name="{{$fields[47]->name}}" class="form-select">
                @foreach (json_decode($fields[47]->values, true) as $key => $val)
                <option value="{{$val}}">{{$val}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm">
            <label>{{$fields[48]->alias}}</label>
            <input name="{{$fields[48]->name}}" type="number" class="form-control" />
        </div>
        <div class="col-sm-1 d-flex align-items-center justify-content-center">
            <span class="btn-remove"><i class="bi-x-circle"></i></span>
        </div>
    </div>
</div>