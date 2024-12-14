@extends('backend.master')
@section('content')
<body class="vertical light">
    <div class="wrapper">
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h2 class="page-title">Add Admin</h2>
                        
                        <!-- Success message when an admin is added successfully -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Admin Details</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admins.store') }}" method="POST">
                                    @csrf

                                    <!-- Name Field -->
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter admin name" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Email Field -->
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter admin email" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Password Confirmation Field -->
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Password Confirmation</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" required>
                                    </div>

                                    <!-- Role Checkbox (Admin) -->
                                    <div class="form-group pl-3 mb-3">
                                        <input type="hidden" name="role" value="0">
                                        <input type="checkbox" name="role" id="is_admin" value="1" class="form-check-input">
                                        <label class="form-check-label" for="is_admin">Is Admin?</label>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Save Admin</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- / .card -->
                    </div> <!-- .col-6 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->
</body>
@endsection
