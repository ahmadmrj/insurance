<div class="subsection">
    <div class="items">
        <div class="form-group row item">
            <div class="col-2">
                <label>{{$fields[45]->alias}}</label>
                <input name="{{$fields[45]->name}}" type="text" class="form-control" maxlength="25" />
            </div>
            <div class="col-sm">
                <label>{{$fields[46]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[46]->name}}" type="text" class="form-control date" autocomplete="off" data-provide="datepicker" />
                    <span class="input-group-text"><i class="bi-calendar-date"></i></span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[47]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[47]->name}}" type="text" class="form-control date" autocomplete="off" data-provide="datepicker" />
                    <span class="input-group-text"><i class="bi-calendar-date"></i></span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[48]->alias}}</label>
                <input name="{{$fields[48]->name}}" type="text" class="form-control" maxlength="15" />
            </div>
            <div class="col-sm">
                <label>{{$fields[49]->alias}}</label>
                <input name="{{$fields[49]->name}}" type="number" class="form-control" maxlength="6" />
            </div>
            <div class="col-sm">
                <label>{{$fields[50]->alias}}</label>
                <input name="{{$fields[50]->name}}" type="number" class="form-control" maxlength="2" />
            </div>
            <div class="col-sm">
                <label>{{$fields[51]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[51]->name}}" type="text" class="form-control money" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[52]->alias}}</label>
                <div class="input-group">
                    <input name="{{$fields[52]->name}}" type="text" class="form-control money" />
                    <span class="input-group-text">$</span>
                </div>
            </div>
            <div class="col-sm">
                <label>{{$fields[53]->alias}}</label>
                <input name="{{$fields[53]->name}}" type="number" class="form-control" maxlength="3" />
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center button-group">
                <span class="button button-remove" title="Remove"><i class="bi-x-circle"></i></span>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary btn-sm add_item">Add another one</button>
</div>

