{{ csrf_field() }}
<div class="form-group">
    <label for="title">Naziv događaja</label>
    <input type="text" name="title" id="title" class="form-control span5" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="location">Lokacija događaja</label>
    <input type="text" name="location" id="location" class="form-control span4" value="{{ old('location') }}">
</div>
<div class="form-group">
    <label for="date">Datum događaja</label>
    <input type="date" name="date" id="date" class="form-control span2" value="{{ old('date') }}">
</div>
<div class="form-group">
    <label for="time">Vrijeme događaja</label>
    <input type="time" name="time" id="time" class="form-control span1" value="{{ old('time') }}">
</div>
<div class="form-group">
    <label for="desc">Opis događaja</label>
            <textarea type="text" name="desc" id="desc" class="form-control" value="{{ old('desc') }}">
            </textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Dodaj događaj</button>
    <div>