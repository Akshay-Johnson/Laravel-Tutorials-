@extends('layouts.main')

@section('header')
<h2>Welcome to the Home Page</h2>
@include('sidemenu')
@endsection

@section('main')
           <h1>Home</h1>
      
      <form action="{{ route('form') }}" method="POST">
        @csrf
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <button type="submit" value="Submit">Submit</button>


      </form>
      <button><a href="{{ route('contact') }}">Contact</a></button>
@endsection 

@section('footer')

        <p>&copy; 2024 My Website. All rights reserved.</p>
@endsection
   
