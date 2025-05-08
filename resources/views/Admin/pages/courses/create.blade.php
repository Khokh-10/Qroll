@extends('Admin.layouts.app')

@section('admin-content')

<body>
    <div class="container mt-5">
        <div class="row justify-content-end">
            <!-- Profile Form Section -->
            <div class="col-md-10">
                <h3 class="mb-4 text-end">Add new course</h3>
                <form action="{{ route('courses.store') }}" method="POST">
                    <x-success></x-success>
                    <x-errors></x-errors>
                    @csrf
                    <div class="form-group">
                        <label for="name">Course Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label for="doctor_id">Doctor Name</label>
                        <select name="doctor_id" id="doctor_id" class="form-control" >
                            <option value="" disabled selected>Select a doctor</option>
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="teacher_id">Teacher Name</label>
                        <select name="teachers[]" id="teachers" class="form-control" multiple>
                            <option value="" disabled selected>Select a teacher</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }} </option>
                            @endforeach
                        </select>
                    </div>
                
                      
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                
            </div>
        </div>
    </div>



  @endsection