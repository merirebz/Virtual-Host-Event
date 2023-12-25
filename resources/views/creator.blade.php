@extends('layouts.app')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
    
                <div class="card-body">
                    You are a creator User.
                   
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{url('hh/ajouter')}}"><button class="button"><span>Create Event </span></button></a>
@endsection