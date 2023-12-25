<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('nb')
 <header>
 <h1> Popular Events </h1>  
 </header>

    <section  class="hero-section">

    @foreach ($cart as  $c) 
    <div class="wrapper">  
    
    <div class="card front-face">  
    <img src="{{asset('images/'.$c->src)}}" alt="" >
    </div>  
    <div class="card back-face">   
     <div class="info">  
      <div class="title"  >{{$c->Eventname}}</div>  
       
      <p><br />{{$c->dateDebut}} {{$c->dateFin}}</p>  
     </div>  
     <a  type="submit" href='{{url("details" ,["Eventname" => $c->Eventname])}}' class="btn btn-primary">Read More</a>
     <ul>  
      <a href="#"><i class="fab fa-twitter"></i></a>  
      <a href="#"><i class="fab fa-instagram"></i></a>  
      <a href="#"><i class="fab fa-youtube"></i></a>  
     </ul>  
    </div>  
   </div>  
  
   
   </div>
   @endforeach
   </section>

   {{-- Pagination --}}
        <div class="d-flex justify-content-center mx-auto ">
            {!! $cart->links() !!}
        </div>
  
</body>
</html>