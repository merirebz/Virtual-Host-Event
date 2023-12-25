<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="{{asset('styles/details.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Document</title>

</head>

<body>
<!-- @include('nb') -->

    <div class="card-image" >

<img src="{{asset('images/'.$event->src)}}" alt="" width="100">
</div>
<h1>
About this event</h1>
<div class="nine">
  <h1>{{ $event->Eventname }}<span>{{$event->Organisatorname }}</span></h1>
</div>
 <!-- <p class="title1"><span>{{ $event->Eventname }}</span></p><br>
  <p  class="title2"><span  >Organized by:<b class="info">{{$event->Organisatorname }}</b></span></p> -->
  
<p class="title2">
  <img src="{{asset('images/calendrier.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->dateDebut}}|{{$event->dateFin}}</b>
</p>

<p class="title2">
  <img src="{{asset('images/clock.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->heureD}}{{$event->heureF}}</b>
</p>
<p class="title2">
  <img src="{{asset('images/ty.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->type}}</b>
</p>
<div class="dt">
  <p>{{$event->details}}</p>
</div>
 <!-- <p><span>{{$event->payement}}</span></p> -->
<p class="title2">
  <img src="{{asset('images/link.png')}}" alt="" width="33" class="im" >
  <b class="info">{{$event->linkEvent}}</b>
</p>
</body>

</html>