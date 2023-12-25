@extends('events.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Events</div>
  <div class="card-body">
       
      <form action="{{ url('/evenement') }}" method="post">
        {!! csrf_field() !!}
        <label>Eventname</label></br>
        <input type="text" name="Eventname" id="Eventname" class="form-control"></br>
        <label>Organisatorname</label></br>
        <input type="text" name="Organisatorname" id="Organisatorname" class="form-control"></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>heureD</label></br>
        <input type="time" name="heureD" id="heureD" class="form-control"></br>
        <label>heureF</label></br>
        <input type="time" name="heureF" id="heureF" class="form-control"></br>
        <label>dateDebut</label></br>
        <input type="date" name="dateDebut" id="dateDebut" class="form-control"></br>
        <label>dateFin</label></br>
        <input type="date" name="dateFin" id="dateFin" class="form-control"></br>
        <label>payement</label></br>
        <input type="text" name="payement" id="payement" class="form-control"></br>
        <label>linkEvent</label></br>
        <input type="url" name="linkEvent" id="linkEvent" class="form-control"></br>
        <label>details</label></br>
        <textarea  name="details" id="details" class="form-control"></textarea></br>
        <label>Image</label></br>
        <input type="file" name="src" id="src" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop