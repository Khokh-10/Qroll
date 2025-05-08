@extends('Admin.layouts.app')

@section('admin-content')

<div class="container mt-5">
    <!-- Back Button -->

    <div class="row justify-content-end">
    <!-- Action Buttons -->
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-outline-dark">Import From Excel Sheet</button>
        <a href="{{ route('doctors.create') }}" class="btn btn-dark">+ Add New Doctor</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" class="form-control w-50 d-inline" placeholder="Teacher Name">
        <button class="btn btn-dark">Search</button>
    </div>

    <!-- Doctors Table -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>National ID</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <x-success></x-success>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->national_num }}</td>
                    <td>{{ $doctor->phone_number }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-dark btn-sm">View</a>

                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                            @csrf   
                            @method('DELETE')
                          
                            <button type="submit" class="btn btn-danger btn-sm" onclick=return confirm('Are you sure you want to delete this doctor?')">
                                Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2">
            {{$doctors->links()}}
        </div>
      
    </div>
</div>
</div>



@endsection