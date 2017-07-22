<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Anzeigename* </label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="displayName" name="displayName"
               placeholder="Anzeigename"
                @include('partials.forminputs.oldorentityvalue', ["type" => "displayName"])>
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Typ* </label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="type" name="type"
               placeholder="Typ"
                @include('partials.forminputs.oldorentityvalue', ["type" => "type"])>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-info">Speichern</button>
    </div>
</div>