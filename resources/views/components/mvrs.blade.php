<div class="subsection">
    <p class="title">DRIVERS <small>(1)</small></p>
    <div class="items">
        <div class="form-group row item">
            <div class="col-sm">
                <label>{{$fields[37]->alias}}</label>
                <input name="{{$fields[37]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[38]->alias}}</label>
                <input name="{{$fields[38]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[39]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[39]->name}}" type="text" class="form-control" autocomplete="off" data-provide="datepicker" />
                    <span class="input-group-text"><i class="bi-calendar-date"></i></span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[40]->alias}}</label>
                <input name="{{$fields[40]->name}}" type="text" class="form-control" maxlength="12" />
            </div>
            <div class="col-sm">
                <label>{{$fields[41]->alias}}</label>
                <select name="{{$fields[41]->name}}" class="form-select">
                    @foreach ($states as $key => $val)
                    <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
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
                <input name="{{$fields[43]->name}}" type="number" class="form-control" maxlength="2" />
            </div>
            <div class="col-sm">
                <label>{{$fields[65]->alias}}</label>
                <select name="{{$fields[65]->name}}" class="form-select">
                    @foreach (json_decode($fields[65]->values, true) as $key => $val)
                    <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm">
                <label>{{$fields[62]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[62]->name}}" type="text" class="form-control" autocomplete="off" data-provide="datepicker" required />
                    <span class="input-group-text"><i class="bi-calendar-date"></i></span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[63]->alias}}</label>
                <input name="{{$fields[63]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm">
                <label>{{$fields[64]->alias}}</label>
                <input name="{{$fields[64]->name}}" type="text" class="form-control" />
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center button-group">
                <span class="button button-upload" title="Upload Attachment"><i class="bi-upload"></i></span>
                <span class="button button-remove" title="Remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another driver</button>
</div>