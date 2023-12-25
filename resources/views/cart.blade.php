<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Link rel='stylesheet' href="{{asset('styles/cart.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main">
<div class="card">
@foreach ($cart as  $c) 
<div class="image">
   <img src="{{$c->src}}">
</div>
<div class="title">
 <h1>{{$c->Eventname}}</h1>
</div>
<div class="des">
 <p>{{$c->dateDebut}}</p>
 <p></p>
 <a  type="submit" href="{{ route('events.read', ['Eventname' => $c->Eventname]) }}" class="btn btn-primary">Read More...</a>  
</a>
 @endforeach
</div>
</div>
</body>
</html>