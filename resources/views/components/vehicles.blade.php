<!-- {{$fields[29]->alias}} -->
<div class="form-group row">
    <div class="col-sm">
        <label>NUMBER OF TRUCKS & POWER UNIT</label>
        <input type="number" name="" class="form-control" id="trucksnumber" />
    </div>
</div>

<div class="subsection" id="trucks">
    <p class="title">TRUCK 1</p>
    <div class="form-group row">
        <div class="col-sm">
            <label>{{$fields[35]->alias}}</label>
            <input name="{{$fields[35]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[36]->alias}}</label>
            <input name="{{$fields[36]->name}}" type="text" class="form-control" />
        </div>
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
            <input name="{{$fields[39]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[40]->alias}}</label>
            <input name="{{$fields[40]->name}}" type="text" class="form-control" />
        </div>
        <div class="col-sm">
            <label>{{$fields[41]->alias}}</label>
            <input name="{{$fields[41]->name}}" type="text" class="form-control" />
        </div>
    </div>
</div>

<p>&nbsp</p>
<div class="form-group row">
    <div class="col-sm">
        <label>NUMBER OF TRAILERS</label>
        <input type="number" name="" class="form-control" id="trailersnumber" />
    </div>
</div>


@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        alert("Settings page was loaded");
    });
</script>
@endsection