<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Anzeigename* </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="displayName" name="displayName"
               placeholder="Anzeigename" @if($entity) value="{{$entity->displayName}}"@endif/>
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-1 control-label">Typ* </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="type" name="type"
               placeholder="Typ" @if($entity) value="{{$entity->type}}"@endif/>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-default">Speichern</button>
    </div>
</div>