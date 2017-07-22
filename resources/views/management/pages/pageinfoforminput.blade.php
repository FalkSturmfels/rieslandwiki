<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name* </label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Name"
                @include('partials.forminputs.oldorentityvalue', ["type" => "name"])>
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Überschrift* </label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="headline" name="headline"
               placeholder="Überschrift"
                @include('partials.forminputs.oldorentityvalue', ["type" => "headline"])>
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Unter-Überschrift </label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="subHeadline" name="subHeadline"
               placeholder="Unter-Überschrift"
                @include('partials.forminputs.oldorentityvalue', ["type" => "subHeadline"])>
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Seitenart</label>
    <div class="col-sm-3">
        @include('partials.forminputs.dropdownlist.dropdownlist', ["type" =>'info', "light"=>true,
        'values'=>$values])
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-info">Speichern</button>
    </div>
</div>

