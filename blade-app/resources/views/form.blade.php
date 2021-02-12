
@extends('layouts/main')

@section('title','form')


@section('content')
 <!-- Success message -->
 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


<div id="login">
  <form method="POST" action="/form">
      @csrf
    <div class="container1">
      <div id="login-row" class="row justify-content-center align-items-center">
          <div id="login-column" class="col-md-10">
              <div class="login-box" class="col-md-18">
                      <h3 class="text-center text-info">SIGN IN</h3>
                    <div class="form-group">
                           <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                      </div>
                        <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="password" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                        <br>
                        <div class="form-group">
                              <input type="submit" name="submit" class="btn btn-info btn-md" value="LOGIN">
                        </div>
                </div>
            </div>
        </div>
    </div>
  </form>
</div>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
.container1 #login-row {
  margin-top: 120px;
  max-width: 500px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
  margin-left:500px;
  border-radius:10px;
}

</style>

@endsection