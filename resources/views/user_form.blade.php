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
                value="{{ old('name', isset($user) ? $user->name : null) }}" 
                placeholder="user name"
                name="name" type="text"  class="form-control" 
                id="input_user_name" aria-describedby="emailHelp">
            @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>             
            @enderror
        </div>
        <div class="row mb-3">
            <label for="input_user_email" class="form-label ">Email address</label>
            <input 
                value="{{old('email', isset($user) ? $user->email : null)}}" 
                placeholder="email@example.com"
                name="email" type="email" class="form-control" 
                id="input_user_email" aria-describedby="emailHelp">
            @error('email')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>             
            @enderror                
        </div>
    </div>
    <div class="mb-3">
        <button type="bnt bnt-success" class="btn btn-primary">Save</button>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div> 
    @endif   
  
</form>
@endsection