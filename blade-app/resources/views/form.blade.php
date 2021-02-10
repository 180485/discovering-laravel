
@extends('layouts/main')

@section('title','form')


@section('content')
 <!-- Success message -->
 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


<form method="POST" action="/form">
@csrf
 
 <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username"  name="username" class="form-control">
     @if ($errors->has('username'))
        <span class="text-danger">{{ $errors->first('username') }}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="emai"  name="email" class="form-control">
    @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control">
    @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection