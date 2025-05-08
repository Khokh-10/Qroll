@extends('Admin.layouts.app')

@section('admin-content')

    <body>
        <div class="container mt-5">
            <div class="row justify-content-end">
                <!-- Profile Form Section -->
                <div class="col-md-10">
                    {{-- <h3 class="mb-4 text-end">Profile</h3> --}}
                    <form method="POST" action="{{route('teachers.store')}}">
                        @csrf
                        <x-success></x-success>
                        <x-errors></x-errors>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone">
                        </div>

                        <!-- National name -->
                        <div class="mb-3">
                            <label for="national-name" class="form-label">National id</label>
                            <input type="text" class="form-control" name="national_id" >
                        </div>
                        <div class="mt-3">
                                <button href="" type="submit" class="btn btn-primary">
                                    save</button>
                            </div>

                            <div class="mb-3">
                                OR
                            </div>


                        

                       
                    </form>
                    
                    <div class="modal-body">
                        <form action="{{ route('import.teacher') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="file" class="form-label">Choose Excel File</label>
                                <input type="file" name="file" id="file" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>

                </div>
            </div>
        </div>


@endsection
