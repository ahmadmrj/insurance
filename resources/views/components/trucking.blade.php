<?php
$typeOptions = json_decode($fields[1]->values, true);
?>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[1]->alias}}</label>
        <select name="{{$fields[1]->name}}" class="form-select">
            @foreach ($typeOptions as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm">
        <label>{{$fields[2]->alias}}</label>
        <input name="{{$fields[2]->name}}" type="text" class="form-control" data-provide="datepicker" />
    </div>
    <div class="col-sm">
        <label>{{$fields[3]->alias}}</label>
        <input name="{{$fields[3]->name}}" type="text" class="form-control" data-provide="datepicker" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[4]->alias}}</label>
        <input name="{{$fields[4]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[5]->alias}}</label>
        <input name="{{$fields[5]->name}}" type="text" class="form-control" />
    </div>
    <div class="col-sm">
        <label>{{$fields[6]->alias}}</label>
        <input name="{{$fields[6]->name}}" type="text" class="form-control" />
    </div>
</div>

<div class="form-group row">
    <div class="col-sm">
        <label>{{$fields[7]->alias}}</label>
        <input name="{{$fields[7]->name}}" type="text" class="form-control" placeholder="e.g 2224448888" />
    </div>
    <div class="col-sm">
        <label>{{$fields[8]->alias}}</label>
        <input name="{{$fields[8]->name}}" type="text" class="form-control" />
    </div>
</div>

@section('scripts')
<script language="text/javascript">
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>
@endsection