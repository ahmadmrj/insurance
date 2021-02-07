<div class="subsection">
    <p class="title">TRUCKS <small>(1)</small></p>
    <div class="items" data-max-items="9">
        <div class="form-group row item">
            <div class="col-sm">
                <label>{{$fields[30]->alias}}</label>
                <input name="{{$fields[30]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[31]->alias}}</label>
                <input name="{{$fields[31]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[32]->alias}}</label>
                <input name="{{$fields[32]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[33]->alias}}</label>
                <input name="{{$fields[33]->name}}" type="text" class="form-control" maxlength="17" />
            </div>
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
                <div class="input-group">
                    <input name="{{$fields[35]->name}}" type="text" class="form-control money" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[36]->alias}}</label>
                <input name="{{$fields[36]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center button-group">
                <span class="button button-remove" title="Remove" ><i class="bi-x-circle"></i></span>
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
                <label>{{$fields[30]->alias}}</label>
                <input name="{{$fields[30]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[31]->alias}}</label>
                <input name="{{$fields[31]->name}}" type="number" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[32]->alias}}</label>
                <input name="{{$fields[32]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[33]->alias}}</label>
                <input name="{{$fields[33]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[35]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[35]->name}}" type="text" class="form-control money" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[36]->alias}}</label>
                <input name="{{$fields[36]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center button-group">
                <span class="button button-remove" title="Remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another trailer</button>
</div>

