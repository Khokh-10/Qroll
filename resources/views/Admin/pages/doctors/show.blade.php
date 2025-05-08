@extends('Admin.layouts.app')

@section('admin-content')

<body>
    <div class="container mt-5">
        <div class="row justify-content-end">
            <!-- Profile Form Section -->
            <div class="col-md-10">
                <h3 class="mb-4 text-end">Profile</h3>
                <x-success></x-success>
                
                <x-errors></x-errors>
                    
                    @foreach ($doctors as $doctor)
                        
                


                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text"  class="form-control" id="name" placeholder="{{$doctor->name}}" readonly>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="{{$doctor->email}}"readonly>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="{{$doctor->phone_number}}"readonly>
                    </div>

                    <!-- National ID -->
                    <div class="mb-3">
                        <label for="national-id" class="form-label">National ID</label>
                        <input type="text" class="form-control" id="national-id" placeholder="{{$doctor->national_num}}"readonly>
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
                        <form action="{{ route('password.doupdate',$doctor->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="input-group">
                                <!-- Password Field -->
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="password" 
                                    name="newpassword" 
                                    value="{{$doctor->password}}" 
                                    >
                                <!-- Show/Hide Button -->
                                <button 
                                    type="button" 
                                    class="btn btn-outline-secondary" 
                                    onclick="togglePassword()">👁️</button>
                            </div>
                            <!-- Submit Button -->
                            <div class="mt-3">
                               
                                <button  type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                            </div>
                        
                    </div>
         
                    @endforeach
              
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle Password Visibility
        function togglePassword() {
            const passwordField = document.getElementById('password');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>


  @endsection