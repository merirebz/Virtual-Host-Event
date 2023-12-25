
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color:#080710;
 
}
.background{
    width: 430px;
    height: 600px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        white
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        purple,
       black
    );
    right: -30px;
    bottom: -80px;
}

form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}
form{
    height: 620px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}


label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 80px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.z{
    margin-top: 8%;
}
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
<div class="container">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <form method="post" action="{{url('save')}}">
        {{csrf_field()}}
        
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name">

            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
       

        
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">

            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
      
       
            <label for="is_admin" class="form-label">Profession</label>|<span class="text-muted">    admin=>1 | user=>0 | creator=>2</span>
            <input type="number" name="is_admin" id="is_admin" class="form-control" placeholder="Profestion">

            @error('is_admin')
                <span class="text-danger">{{$message}}</span>
            @enderror
      

       
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">

            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
     
        

        

     
            <button type="submit" class="z"  >Add</button>
            <!-- <a href="{{url('admin/home')}}" class="z" >Back</a> -->
       
    </form>
</div>

@endsection

</body>
</html>
