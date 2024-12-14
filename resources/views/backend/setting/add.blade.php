@extends('backend.master')
@section('content')
<body class="vertical  light  ">
    <div class="wrapper">
      
      
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-6">
              <h2 class="page-title">Add Settings</h2>
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">settings</strong>
                </div>
                <div class="card-body">
                  <form action="{{route('settings.store')}}" method="post">
                    @csrf
                    <div class="row">
                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="col-md">
                          <div class="form-group mb-3">
                            <label for="simpleinput">Service Time</label>
                            <input type="text" name="service" id="simpleinput" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-email">Email</label>
                            <input type="email" id="example-email" name="email" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-password">phone number1</label>
                            <input type="text" id="example-password" name="phone1" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-password">phone number2</label>
                            <input type="text" id="example-password" name="phone2" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-palaceholder">location</label>
                            <input type="text" id="example-palaceholder" name="location" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-palaceholder">instagram</label>
                            <input type="text" id="example-palaceholder" name="instagram" class="form-control" required >
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-palaceholder">facebook</label>
                            <input type="text" id="example-palaceholder" name="facebook" class="form-control" required>
                          </div>
                          <div class="form-group mb-3">
                            <label for="example-palaceholder">tiktok</label>
                            <input type="text" id="example-palaceholder" name="tiktok" class="form-control" required>
                          </div>
                        </div>
                    </div>
                    <button type="submit"  class="btn mb-2 btn-primary">Primary</button>

                  </form>

                  
                </div>
              </div> <!-- / .card -->
               <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    
  </body>
@endsection