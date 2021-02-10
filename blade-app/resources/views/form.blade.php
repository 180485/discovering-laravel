
@extends('layouts/main')

@section('title','form')


@section('content')

@if ($errors->any())
        {{ $errors ? dd($errors) : null }}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="POST" action="/form">
@csrf
 
 <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="username"  name="username" class="form-control">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection