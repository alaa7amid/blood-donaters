@extends('backend.master')
@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow bg-primary text-white border-0 equal-height-card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary-light">
                    <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                  </span>
                </div>
                <div class="col pr-0">
                  <p class="small text-muted mb-4">Number of site users</p>
                  <span class="h3 mb-0 text-white">{{$user}}</span>
                  {{-- <span class="small text-muted">+5.5%</span> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0 equal-height-card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                  </span>
                </div>
                <div class="col pr-0">
                  <p class="small text-muted mb-4">Number of donation requests</p>
                  <span class="h3 mb-0">{{$donate}}</span>
                  {{-- <span class="small text-success">+16.5%</span> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0 equal-height-card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-filter text-white mb-0"></i>
                  </span>
                </div>
                <div class="col">
                  <p class="small text-muted mb-4">Number of blood requests</p>
                  <div class="row align-items-center no-gutters">
                    <div class="col-auto">
                      <span class="h3 mr-2 mb-0">{{$requsting}}</span>
                    </div>
                    {{-- <div class="col-md-12 col-lg">
                      <div class="progress progress-sm mt-2" style="height:3px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0 equal-height-card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-activity text-white mb-0"></i>
                  </span>
                </div>
                <div class="col">
                  <p class="small text-muted mb-4">Number of site users without request or donation</p>
                  <span class="h3 mb-0">{{$view}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- end section -->
   
    <!-- end section -->
    <!-- info small box -->
    <!-- / .r   ow -->
    <div class="row">
      <!-- Recent orders -->
      <div class="col-md-12">
        <h6 class="mb-3">Last orders</h6>
        <table class="table table-borderless table-striped">
          <thead>
            <tr role="row">
              <th>ID</th>
              <th>Name</th>
              <th>Activity</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="col">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>
                    @if($user->role == '1')
                        Admin 
                        @if($user->requsting->isNotEmpty() && $user->donates->isNotEmpty())
                            + Blood Requester + Donor
                        @elseif($user->requsting->isNotEmpty())
                            + Blood Requester
                        @elseif($user->donates->isNotEmpty())
                            + Donor
                        @endif
                    @elseif($user->requsting->isNotEmpty() && $user->donates->isNotEmpty())
                        Blood Requester + Donor
                    @elseif($user->requsting->isNotEmpty())
                        Blood Requester
                    @elseif($user->donates->isNotEmpty())
                        Donor
                    @else
                        Viewer
                    @endif
                </td>             
            </tr>
        @endforeach
        
        

            

          </tbody>
        </table>
      </div> <!-- / .col-md-3 -->
    </div> <!-- end section -->
</div>
@endsection

@section('css')
    <style>
        .equal-height-card {
  min-height: 150px; /* يمكنك تعديل هذا الرقم حسب التصميم */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

    </style>
@endsection