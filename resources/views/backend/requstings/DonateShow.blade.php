@extends('backend.master')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Donation</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Donor Information</h4>
            <p><strong>Full Name:</strong> {{ $donationRequest->full_name }}</p>
            <p><strong>Email:</strong> {{ $donationRequest->email }}</p>
            <p><strong>Gender:</strong> {{ $donationRequest->gender }}</p>
            <p><strong>Phone:</strong> {{ $donationRequest->phone }}</p>
            <p><strong>Date of Birth:</strong> {{ $donationRequest->date_of_birth }}</p>
            <p><strong>Blood Type:</strong> {{ $donationRequest->blood_type }}</p>
            <p><strong>Donated Previously:</strong> {{ $donationRequest->donated_previously }}</p>
            @if($donationRequest->donated_previously === 'Yes')
            <p><strong>Last Donation Date:</strong> {{ $donationRequest->last_donation_date }}</p>
            @endif

            <h4 class="card-title mt-4">Health Details</h4>
            <p><strong>Recent Activities:</strong> 
                @if($donationRequest->recent_activities)
                    @php
                        $recentActivities = json_decode($donationRequest->recent_activities, true);
                    @endphp
                    @if(is_array($recentActivities))
                        {{ implode(', ', $recentActivities) }}
                    @else
                        {{ $donationRequest->recent_activities }}
                    @endif
                @else
                    None
                @endif
            </p>

            <p><strong>Chronic Diseases:</strong> 
                @if($donationRequest->chronic_diseases)
                    @php
                        // فك تشفير الأمراض المزمنة إلى مصفوفة
                        $chronicDiseases = json_decode($donationRequest->chronic_diseases, true);
                        // فك تشفير تفاصيل الأمراض المزمنة
                        $diseaseDetails = json_decode($donationRequest->chronic_diseases_details, true);
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
                        {{ $donationRequest->chronic_diseases }}
                    @endif
                @else
                    None
                @endif
            </p>
               <!-- Medications Details -->
               <h4 class="card-title mt-4">Medications</h4>
               <p><strong>Medications:</strong> 
                   @if($donationRequest->medications)
                       @php
                           // فك تشفير الأدوية إلى مصفوفة
                           $medications = json_decode($donationRequest->medications, true);
                           // فك تشفير تفاصيل الأدوية
                           $medicationDetails = json_decode($donationRequest->medications_details, true);
                       @endphp
                       @if(is_array($medications) && count($medications) > 0)
                           @foreach($medications as $medication)
                               <p><strong>{{ $medication }}:</strong>
                                   @if(isset($medicationDetails[$medication]))
                                       {{ $medicationDetails[$medication] }}
                                   @else
                                       No details available 
                                   @endif
                               </p>
                           @endforeach
                       @else
                           {{ $donationRequest->medications }}
                       @endif
                   @else
                       None
                   @endif
               </p>
        </div>
    </div>
</div>
@endsection
