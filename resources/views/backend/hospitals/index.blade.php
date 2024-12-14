@extends('backend.master')
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Hospitals</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Hospital Name</th>
                        <th>Actions</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hospitals as $hospital)
                            <tr>
                            <td>{{$hospital->id}}</td>
                            <td>{{$hospital->hospital}}</td>
                           
                            <td class="row">
                                <a href="{{route('hospitals.edit',$hospital->id)}}"><button class="btn btn-primary mr-1">Edit</button></a>
                                <form action="{{route('hospitals.destroy',$hospital->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div>
      </div>
    </div>
</main>


@endsection

