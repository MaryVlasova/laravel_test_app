@extends('layout')

@section('title', 'Users')

@section('content')



<form class="text-start" method="POST" action={{route('users.store')}}>
  <div class="mb-3">
    <label for="input_user_name" class="form-label">Email address</label>
    <input name="name" type="email" class="form-control" id="input_user_name" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="input_user_email" class="form-label ">Email address</label>
    <input name="email" type="email" class="form-control" id="input_user_email" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <button type="bnt bnt-success" class="btn btn-primary">Save</button>
</form>
@endsection