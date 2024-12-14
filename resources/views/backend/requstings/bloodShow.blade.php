@extends('backend.master')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Blood Requests </h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Blood Requests Information</h4>
            <p><strong>Full Name:</strong> {{ $bloodRequest->patient_name }}</p>
            <p><strong>Email:</strong> {{ $bloodRequest->email }}</p>
            <p><strong>Gender:</strong> {{ $bloodRequest->gender }}</p>
            <p><strong>Hospital:</strong> {{ $bloodRequest->hospital->hospital }}</p>

            <p><strong>Phone:</strong> {{ $bloodRequest->phone }}</p>
            <p><strong>Date of Birth:</strong> {{ $bloodRequest->date_of_birth }}</p>
            <p><strong>Blood Type:</strong> {{ $bloodRequest->blood_type }}</p>
            

            <h4 class="card-title mt-4">Health Details</h4>
       

            <p><strong>Chronic Diseases:</strong> 
                @if($bloodRequest->chronic_diseases)
                    @php
                        // فك تشفير الأمراض المزمنة إلى مصفوفة
                        $chronicDiseases = json_decode($bloodRequest->chronic_diseases, true);
                        // فك تشفير تفاصيل الأمراض المزمنة
                        $diseaseDetails = json_decode($bloodRequest->chronic_diseases_details, true);
                    @endphp
                    @if(is_array($chronicDiseases) && count($chronicDiseases) > 0)
                        @foreach($chronicDiseases as $disease)
                            <p><strong>{{ $disease }}:</strong>
                                @if(isset($diseaseDetails[$disease]))
                                    {{ $diseaseDetails[$disease] }}
                                @else
                                    No details available
                                @endif
                            </p>
                        @endforeach
                    @else
                        {{ $bloodRequest->chronic_diseases }}
                    @endif
                @else
                    None
                @endif
            </p>
          
        </div>
    </div>
</div>
@endsection
