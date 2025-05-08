<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select User Type</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .user-option {
      cursor: pointer;
      width: 144px;
      margin: 1rem;
    }
    .user-option img {
      width: 100%;
    }
    .btn-next {
      background-color: #161B39;
      color: white;
      width: 277px;
      padding: 13px;
      border-radius: 12px;
    }
    .btn-next i {
      margin-left: 10px;
    }
    .error-msg {
      color: red;
    }
  </style>
</head>
<body>

<div class="container-fluid d-flex flex-wrap">
  <!-- Left Image -->
  <div class="col-md-6 d-none d-md-block">
    <img src="{{asset('assets/465541941_1115304710376060_7367626225223365144_n 1.png')}}" class="img-fluid m-4" alt="Main Image" style="height: 690px;">
  </div>

  <!-- Right Content -->
  <div class="col-md-6 p-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center">
      <img src="{{asset('assets/logo.png')}}" alt="Logo" class="img-fluid" style="height: 40px;">
      <img src="{{asset('assets/Group 253.png')}}" alt="Banner" class="img-fluid d-none d-md-block" style="height: 20px;">
    </div>

    <!-- Title and Subtitle -->
    <div class="text-center mt-4">
      <p class="d-none d-md-block">Login to your account</p>
      <h1 class="h3 d-none d-md-block">Select User Type</h1>
    </div>

    <!-- User Selection Grid -->
    <div class="d-flex justify-content-center flex-wrap gap-4">
      <div>
        <div class="user-option" onclick="selectUser('admin')">
          <img id="admin-img" src="{{asset('assets/Group 247.png')}}" alt="Admin">
        </div>
        <div class="user-option" onclick="selectUser('teacher')">
          <img id="teacher-img" src="{{asset('assets/Group 241.png')}}" alt="Teacher">
        </div>
      </div>
      <div>
        <div class="user-option" onclick="selectUser('doctor')">
          <img id="doctor-img" src="{{asset('assets/Group 245.png')}}" alt="Doctor">
        </div>
        <div class="user-option" onclick="selectUser('student')">
          <img id="student-img" src="{{asset('assets/Group 243.png')}}" alt="Student">
        </div>
      </div>
    </div>

    <!-- Error Message -->
    <div id="error-msg" class="text-center mt-3 error-msg d-none">Please select a user type before proceeding.</div>

    <!-- Next Button -->
    <div class="d-flex justify-content-center mt-4">
      <button class="btn btn-next" onclick="goToLogin()">
        Next <i class="fas fa-arrow-right-long"></i>
      </button>
    </div>
  </div>
</div>

<!-- Bottom Logo for Mobile -->
<div class="text-center mt-4 d-md-none">
  <img src="{{asset('assets/Group 253.png')}}" alt="Banner" class="img-fluid" style="width: 40%;">
</div>

<script>
  let selectedUser = "";

  function selectUser(type) {
    selectedUser = type;
    localStorage.setItem("userType", type);
    document.getElementById("error-msg").classList.add("d-none");

    // Reset all images
    document.getElementById("admin-img").src = (type === "admin") ? "{{asset('assets/Group 1000011676.png')}}" : "{{asset('assets/Group 247.png')}}";
    document.getElementById("teacher-img").src = (type === "teacher") ? "{{asset('assets/Group 1000011686.png')}}" : "{{asset('assets/Group 241.png')}}";
    document.getElementById("doctor-img").src = (type === "doctor") ? "{{ asset('assets/Group 1000011681.png') }}" : "{{ asset('assets/Group 245.png') }}";
    document.getElementById("student-img").src = (type === "student") ? "{{asset('assets/Group 1000011691.png')}}" : "{{asset('assets/Group 243.png')}}";
  }

  function goToLogin() {
    if (!selectedUser) {
      document.getElementById("error-msg").classList.remove("d-none");
      return;
    }
    window.location.href = "{{ route('admin.login') }}";  
  }
</script>

</body>
</html>
