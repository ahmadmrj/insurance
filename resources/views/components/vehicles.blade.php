<div class="subsection">
    <p class="title">TRUCKS <small>(1)</small></p>
    <div class="items" data-max-items="9">
        <div class="form-group row item">
            <div class="col-sm">
                <label>{{$fields[38]->alias}}</label>
                <input name="{{$fields[38]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[39]->alias}}</label>
                <input name="{{$fields[39]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[40]->alias}}</label>
                <input name="{{$fields[40]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[41]->alias}}</label>
                <input name="{{$fields[41]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[42]->alias}}</label>
                <select name="{{$fields[42]->name}}" class="form-select">
                    @foreach (json_decode($fields[42]->values, true) as $key => $val)
                    <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm">
                <label>{{$fields[43]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[43]->name}}" type="number" class="form-control" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[44]->alias}}</label>
                <select name="{{$fields[44]->name}}" class="form-select">
                    @foreach (json_decode($fields[44]->values, true) as $key => $val)
                    <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center">
                <span class="btn-remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another truck</button>
</div>

<p>&nbsp</p>
<div class="subsection">
    <p class="title">TRAILERS <small>(1)</small></p>
    <div class="items" data-max-items="9">
        <div class="form-group row item">
            <div class="col-sm">
                <label>{{$fields[38]->alias}}</label>
                <input name="{{$fields[38]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[39]->alias}}</label>
                <input name="{{$fields[39]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[41]->alias}}</label>
                <input name="{{$fields[41]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[43]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[43]->name}}" type="number" class="form-control" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[44]->alias}}</label>
                <select name="{{$fields[44]->name}}" class="form-select">
                    @foreach (json_decode($fields[44]->values, true) as $key => $val)
                    <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center">
                <span class="btn-remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another trailer</button>
</div>

