@extends('Admin.layouts.app')

@section('admin-content')

<div class="container mt-5">
    <!-- Back Button -->

    <div class="row justify-content-end">
    <!-- Action Buttons -->
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-outline-dark">Import From Excel Sheet</button>
        <a href="{{ route('courses.create') }}" class="btn btn-dark">+ Add New course</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" class="form-control w-50 d-inline" placeholder="Teacher Name">
        <button class="btn btn-dark">Search</button>
    </div>

    <!-- courses Table -->
    <div class="table-responsive">
      <table class="table table-hover">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            {{-- <th>Actions</th> --}}
          </tr>
        </thead>
        <tbody>
          <x-success></x-success>
          @foreach($courses as $course)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $course->name }}</td>
            <td>
              <div class="dropdown text-center">
                <button class="btn btn-sm p-0 border-0 bg-transparent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 3a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                  </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="">View All students</a></li>
                  <li><a class="dropdown-item" href="">View Excessive Absence students</a></li>
                  <li><a class="dropdown-item" href="">Filter by section or lecture</a></li>
                  <li><a class="dropdown-item" href="">Edit course information</a></li>

                </ul>
              </div>
            </td>
          </tr>
          @endforeach
            </tbody>
        </table>
        <div class="p-2">
            {{$courses->links()}}
        </div>
      
    </div>
</div>
</div>



@endsection