@extends('Admin.layouts.app')

@section('admin-content')




<!-- Main Content -->
<div class="main-content">
    <h1 class="text-secondary mb-4">PROFILE</h1>
    <form method="POST" action="">
        @csrf
        @foreach ($info as $item)
            
    

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="{{$item->name}}" readonly>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="{{$item->email}}"readonly>
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="010125412455"readonly>
        </div>

        <!-- National ID -->
        <div class="mb-3">
            <label for="national-id" class="form-label">National ID</label>
            <input type="text" class="form-control" id="national-id" placeholder="2901246632020365"readonly>
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob"readonly>
        </div>

        <!-- Home Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Home Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your home address"readonly>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
           
                <div class="input-group">
                    <!-- Password Field -->
                    <input 
                        type="password" 
                        class="form-control" 
                        id="password" 
                        name="password" 
                        value="{{$item->password}}" 
                        >
                    <!-- Show/Hide Button -->
                    <button 
                        type="button" 
                        class="btn btn-outline-secondary" 
                        onclick="togglePassword()">👁️</button>
                </div>
                <!-- Submit Button -->
                <div class="mt-3">
                
                    <a href="{{ route('password.update', ['id' => $item->id]) }}" id="change-password-btn" class="btn btn-outline-dark ms-3 mt-4">Change Password</a>
                </div>
           
        </div> 

        @endforeach
    </form>
  </div>

  @endsection