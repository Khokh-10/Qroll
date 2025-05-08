<div class="sidebar d-none d-sm-block">
  <ul class="nav flex-column">
    <!-- Logo -->
    <li class="nav-item text-center mb-4">
      <img src="{{ asset('assets/zz.png') }}" alt="Logo" class="img-fluid mb-2" />
      <hr style="background-color: #575757;" />
    </li>

    <!-- Avatar and Name -->
    <li class="nav-item mb-4">
      <div class="d-flex align-items-center gap-3">
        <div>
          <img src="{{ asset('assets/R.png') }}" alt="Avatar" class="avatar-img" />
        </div>
        <p class="mb-0">DR Wael</p>
      </div>
    </li>

    <!-- Home -->
    <li class="nav-item mb-3">
      <a href="/doctor-dashboard" class="nav-link d-flex align-items-center">
        <img src="{{ asset('assets/home-1393-svgrepo-com.png') }}" alt="" class="me-2" />
        <span class="flex-grow-1">Home</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="" />
      </a>
    </li>

    <!-- My Profile -->
    <li class="nav-item mb-3">
      <a href="{{ route('profile') }}" class="nav-link d-flex align-items-center">
        <img src="{{ asset('assets/Vector (6).png') }}" alt="Profile Icon" class="me-2" />
        <span class="flex-grow-1">My Profile</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="Arrow Icon" />
      </a>
    </li>

    <!-- Doctors -->
    <li class="nav-item mb-3">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#doctorsCollapse" role="button" aria-expanded="false" aria-controls="doctorsCollapse">
        <img src="{{ asset('assets/Vector (6).png') }}" alt="" class="me-2" />
        <span class="flex-grow-1">Doctors</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="" />
      </a>
      <div class="collapse ms-4 mt-2" id="doctorsCollapse">
        <ul class="nav flex-column">
          <li><a href="{{ route('doctors.create') }}" class="nav-link">Add new doctor <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
          <li><a href="{{ route('doctors.index') }}" class="nav-link">View all doctors <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
        </ul>
      </div>
    </li>

    <!-- Teachers -->
    <li class="nav-item mb-3">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#teachersCollapse" role="button" aria-expanded="false" aria-controls="teachersCollapse">
        <img src="{{ asset('assets/Vector (6).png') }}" alt="" class="me-2" />
        <span class="flex-grow-1">Teachers</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="" />
      </a>
      <div class="collapse ms-4 mt-2" id="teachersCollapse">
        <ul class="nav flex-column">
          <li><a href="{{ route('teachers.create') }}" class="nav-link">Add new teacher <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
          <li><a href="{{ route('teachers.index') }}" class="nav-link">View all teachers <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
        </ul>
      </div>
    </li>

    <!-- Courses -->
    <li class="nav-item mb-3">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#coursesCollapse" role="button" aria-expanded="false" aria-controls="coursesCollapse">
        <img src="{{ asset('assets/Vector (6).png') }}" alt="" class="me-2" />
        <span class="flex-grow-1">Courses</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="" />
      </a>
      <div class="collapse ms-4 mt-2" id="coursesCollapse">
        <ul class="nav flex-column">
          <li><a href="{{ route('courses.create') }}" class="nav-link">Add new course <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
          <li><a href="{{ route('courses.index') }}" class="nav-link">View all courses <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item mb-3">
      <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#coursesCollapse" role="button" aria-expanded="false" aria-controls="coursesCollapse">
        <img src="{{ asset('assets/Vector (6).png') }}" alt="" class="me-2" />
        <span class="flex-grow-1">Students</span>
        <img src="{{ asset('assets/Vector (2).png') }}" alt="" />
      </a>
      <div class="collapse ms-4 mt-2" id="coursesCollapse">
        <ul class="nav flex-column">
          <li><a href="{{ route('students.create') }}" class="nav-link">Add new student <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
          <li><a href="{{ route('students.index') }}" class="nav-link">View all students   <img src="{{ asset('assets/Vector (2).png') }}" alt="" class="ms-2" /></a></li>
        </ul>
      </div>
    </li>


    <!-- Sign In -->
    <li class="nav-item position-absolute bottom-0 mb-3 w-100">
      <a href="/home" class="nav-link d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="none" viewBox="0 0 18 16" width="18" height="16">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
        </svg>
        <span>Sign In</span>
      </a>
    </li>
  </ul>
</div>
