<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    .login-btn {
      background-color: #161B39;
      border-radius: 12px;
    }
    .login-btn:hover {
      background-color: #0f122c;
    }
    .login-img {
      height: 690px;
      object-fit: cover;
    }
    .max-md-hide {
      display: none;
    }

    @media (min-width: 768px) {
      .max-md-hide {
        display: block;
      }
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">

      <!-- Left Image Section -->
      <div class="col-md-6 d-none d-md-block">
        <img src="{{asset('assets/465541941_1115304710376060_7367626225223365144_n 1.png')}}" alt="login image" class="img-fluid m-3 login-img">
      </div>

      <!-- Right Login Section -->
      <div class="col-md-6 p-4">
        <!-- Logos -->
        <div class="d-flex justify-content-around align-items-center mb-4">
          <img src="{{asset('assets/logo.png')}}" alt="Logo" class="h-25">
          <img src="{{asset('assets/Group252.png')}}" alt="Title Logo" class="h-25 max-md-hide">
        </div>

        <!-- Login Form -->
        <div class="text-center mt-md-5 mt-3">
          <h3>Login to your account</h3>
        </div>

        <form class="mt-4 mx-auto"  action="{{route('dologin')}}"     method="POST" novalidate style="max-width: 700px;">
            @csrf
                    <x-success></x-success>
                <x-errors></x-errors>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="name@example.com"  name="password">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="************" name="password"> 
          </div>

          <!-- Error message -->
          <p id="error-message" class="text-danger d-none">Error message here</p>

          <div class="text-center mt-5">
            <button type="submit"  class="btn login-btn text-white px-5 py-2">
              Login <img src="{{asset('assets/Vector.png')}}" alt="icon" class="ms-2">
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
