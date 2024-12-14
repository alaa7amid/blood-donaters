@extends('backend.master')
@section('content')
<body class="vertical light">
    <div class="wrapper">
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h2 class="page-title">Add Hospitals</h2>
                        
                        <!-- Success message when an admin is added successfully -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Hospitals Details</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('hospitals.store') }}" method="POST">
                                    @csrf

                                    <!-- Name Field -->
                                    <div class="form-group mb-3">
                                        <label for="name">Hospital Name</label>
                                        <input type="text" name="hospital" id="name" class="form-control" placeholder="Enter hospital name" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    
                                    <!-- Submit Button -->
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Save Hospitals Name</button>
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
