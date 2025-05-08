@extends('Admin.layouts.app')

@section('admin-content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <style>
            .custom-button {
                width: 191px;
                height: 49px;
                border-radius: 12px;
                background-color: #161B39;
                color: white;
            }
        </style>
    </head>

    <body>

        <div class="container my-5">
            <!-- Navigation / Breadcrumb -->
            <div class="d-flex flex-wrap gap-3 mb-4 align-items-center">
                <a href="/doctor-dashboard/profiledoctoer"
                    class="btn btn-link text-decoration-none text-dark d-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    <h5 class="mb-0">BACK</h5>
                </a>
                <span class="text-secondary">PROFILE</span>
                <i class="fa-solid fa-chevron-right text-secondary"></i>
                <span class="text-secondary">CHANGE PASSWORD</span>
            </div>

            <!-- Change Password Form -->
            <div class="mx-auto" style="max-width: 55%;">
                <div class="container mt-5">
                    <div class="row justify-content-end">
                        <!-- Profile Form Section -->


                        <form method="POST" action="{{ route('password.doupdate', ['id' => $user->id]) }}">
                            @csrf
                            <x-success></x-success>
                            <x-errors></x-errors>

                            <div class="mb-3">
                                <label for="oldpassword" class="form-label">oldpassword</label>
                                <div class="input-group">
                                    <!-- Password Field -->
                                    <input type="password" class="form-control" id="password" name="oldpassword">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="new" class="form-label">Newpassword</label>
                                    <div class="input-group">
                                        <!-- Password Field -->
                                        <input type="password" class="form-control" id="password" name="newpassword">
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn custom-button">Save Password</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endsection
