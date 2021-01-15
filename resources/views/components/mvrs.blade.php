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

<div class="subsection">
    <p class="title">DRIVERS <small>(1)</small></p>
    <div class="items">
        <div class="form-group row item">
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
                <div class="input-group">
                    <input name="{{$fields[47]->name}}" type="text" class="form-control" data-provide="datepicker" />
                    <span class="input-group-text"><i class="bi-calendar-date"></i></span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[48]->alias}}</label>
                <input name="{{$fields[48]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[49]->alias}}</label>
                <input name="{{$fields[49]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[50]->alias}}</label>
                <select name="{{$fields[50]->name}}" class="form-select">
                    @foreach (json_decode($fields[50]->values, true) as $key => $val)
                    <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm">
                <label>{{$fields[51]->alias}}</label>
                <input name="{{$fields[51]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center">
                <span class="btn-remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another driver</button>
</div>