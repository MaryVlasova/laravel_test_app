@extends('layout')

@section('title', isset($user) ? 'Update user '. $user->name : 'Create users')

@section('content')



<form class="text-start" 
    method="POST" 
    @if (isset($user))
        action="{{route('users.update', $user)}}"
    @else
        action="{{route('users.store')}}"
    @endif
    >
    @csrf    
    @isset($user)
        @method("PUT")
    @endisset

    <div class="row mb-3">
        <div class="row mb-3">
            <label for="input_user_name" class="form-label">User name</label>
            <input 
                value="{{isset($user) ? $user->name : 'name'}}" 
                name="name" type="text"  class="form-control" 
                id="input_user_name" aria-describedby="emailHelp">
        </div>
        <div class="row mb-3">
            <label for="input_user_email" class="form-label ">Email address</label>
            <input 
                value="{{isset($user) ? $user->email : 'email@exemple.com'}}" 
                name="email" type="email" class="form-control" 
                id="input_user_email" aria-describedby="emailHelp">
        </div>
    </div>
    <div class="mb-3">
        <button type="bnt bnt-success" class="btn btn-primary">Save</button>
    </div>
    @isset($response)
        @if ($response)
            <div class="alert alert-success" role="alert">
                Data updated successfully
            </div>
        @else
            <div class="alert alert-danger" role="alert">
                Something went wrong
            </div>           
        @endif
    @endisset


  
</form>
@endsection