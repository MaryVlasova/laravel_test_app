@extends('layout')

@section('title', 'Users')

@section('content')




<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
      @foreach($users as $user)
        <tr>
            <th scope="row">{{$user["id"]}}</th>
            <td>{{$user["name"]}}</td>
            <td>{{$user["email"]}}</td>
            <td>
                <a class="btn btn-primary" href="#" role="button">Edit</a>                
            </td>
        </tr>
      @endforeach

  </tbody>
</table>
<div class="text-start">
<a class="btn btn-primary mb-4" role="button" href={{route('users.create')}}>Create</a>
</div>


@endsection