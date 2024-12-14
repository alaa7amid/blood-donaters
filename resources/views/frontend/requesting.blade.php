@extends('frontend.master')

@section('content')
<div class="container my-5 blood-request-form">
    <h2 class="text-center mb-4">Blood Request Form</h2>

    <form action="{{route('storeRequest')}}" method="POST">
        @csrf

        <!-- Personal Information -->
        <div class="mb-3">
            <label>Patient's Full Name</label>
            <input type="text" name="patient_name" class="form-control" placeholder="Enter patient's name" required>
        </div>
        {{-- <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" placeholder="Enter patient's age" required>
        </div> --}}
        <div class="mb-3">
            <label>Date of Birth </label>
            <input type="date" name="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone Number</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter patient's phone number" required>
        </div>
        <div class="mb-3">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
        </div>
        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <!-- Blood Information -->
        <div class="mb-3">
            <label>Patient's Blood Type</label>
            <select name="blood_type" class="form-control" required>
                <option value="">Select Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>

        <!-- Medical History -->
        <div class="mb-3">
            <label>Has the patient had a recent blood test?</label>
            <select name="recent_blood_test" class="form-control" required>
                <option value="">Select Answer</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <textarea name="blood_test_details" class="form-control mt-2" placeholder="Enter test date and any notes" style="display: none;"></textarea>
        </div>

        <div class="mb-3">
            <label>Does the patient have any chronic diseases that may affect blood transfusion?</label>
        
            <!-- Heart Disease -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Heart Disease" class="form-check-input toggle-details" data-target="heart_disease_details">
                <label class="form-check-label">Heart Disease</label>
                <textarea name="heart_disease_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Diabetes -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Diabetes" class="form-check-input toggle-details" data-target="diabetes_details">
                <label class="form-check-label">Diabetes</label>
                <textarea name="diabetes_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Kidney Failure -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Kidney Failure" class="form-check-input toggle-details" data-target="kidney_failure_details">
                <label class="form-check-label">Kidney Failure</label>
                <textarea name="kidney_failure_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Liver Disease -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Liver Disease" class="form-check-input toggle-details" data-target="liver_disease_details">
                <label class="form-check-label">Liver Disease</label>
                <textarea name="liver_disease_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Blood Disorders -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Blood Disorders" class="form-check-input toggle-details" data-target="blood_disorders_details">
                <label class="form-check-label">Blood Disorders</label>
                <textarea name="blood_disorders_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Autoimmune Diseases -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Autoimmune Diseases" class="form-check-input toggle-details" data-target="autoimmune_diseases_details">
                <label class="form-check-label">Autoimmune Diseases</label>
                <textarea name="autoimmune_diseases_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Infectious Diseases -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Infectious Diseases" class="form-check-input toggle-details" data-target="infectious_diseases_details">
                <label class="form-check-label">Infectious Diseases</label>
                <textarea name="infectious_diseases_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Cancer -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Cancer" class="form-check-input toggle-details" data-target="cancer_details">
                <label class="form-check-label">Cancer</label>
                <textarea name="cancer_details" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        
            <!-- Other -->
            <div class="form-check">
                <input type="checkbox" name="chronic_diseases[]" value="Other" class="form-check-input toggle-details" data-target="other_chronic_diseases">
                <label class="form-check-label">Other (please specify)</label>
                <textarea name="other_chronic_diseases" class="form-control mt-2 details-field" placeholder="If yes, mention details" style="display: none;"></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label>What is the reason for the blood transfusion request?</label>
            <textarea name="reason_for_request" class="form-control" placeholder="Mention the reason such as bleeding, surgery" required></textarea>
        </div>
        <div class="mb-3">
            <label>Does the patient have severe or continuous bleeding?</label>
            <select name="severe_bleeding" class="form-control" required>
                <option value="">Select Answer</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <textarea name="severe_bleeding_details" class="form-control mt-2" placeholder="If yes, mention details" style="display: none;"></textarea>
        </div>

        <div class="mb-3">
            <label>Does the patient have any allergies?</label>
            <select name="allergies" class="form-control" required>
                <option value="">Select Answer</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <textarea name="allergy_details" class="form-control mt-2" placeholder="If yes, mention the type of allergy" style="display: none;"></textarea>
        </div>

        <div class="mb-3">
            <label>Has the patient recently taken any medications?</label>
            <select name="recent_medication" class="form-control" required>
                <option value="">Select Answer</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <textarea name="medication_details" class="form-control mt-2" placeholder="If yes, mention the medications" style="display: none;"></textarea>
        </div>

        <div class="mb-3">
            <label>Has the patient had any previous surgeries?</label>
            <select name="previous_surgery" class="form-control" required>
                <option value="">Select Answer</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <textarea name="surgery_details" class="form-control mt-2" placeholder="If yes, mention the type of surgery" style="display: none;"></textarea>
        </div>

        <div class="mb-3">
            <label>Choose the hospital </label>
            {{-- <textarea name="hospital" class="form-control mt-2" placeholder="إذا كان نعم، اذكر تفاصيل العملية" ></textarea> --}}

            <select name="hospital_id" class="form-control" required>
                <option value="">Choose the hospital </option>
                @foreach ($hospitals as $hospital)
                    <option value="{{ $hospital->id}}">{{ $hospital->hospital }}</option>
                @endforeach
            </select>
        <button type="submit" class="btn btn-primary btn-block">Submit Request</button>
    </form>
</div>
@endsection


@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // استمع لتغييرات الأسئلة التي تتطلب تفاصيل إضافية
    document.querySelectorAll('select[name="recent_blood_test"], select[name="severe_bleeding"], select[name="allergies"], select[name="recent_medication"], select[name="previous_surgery"]').forEach(function(select) {
        select.addEventListener('change', function() {
            var textArea = this.closest('.mb-3').querySelector('textarea');
            textArea.style.display = this.value === 'Yes' ? 'block' : 'none';
        });
    });

    document.querySelectorAll('input[name="chronic_diseases[]"]').forEach(function(input) {
        input.addEventListener('change', function() {
            var textArea = this.closest('.form-check').querySelector('textarea');
            textArea.style.display = this.checked ? 'block' : 'none';
        });
    });
});

$(document).ready(function() {
    window.scrollTo(0, 0); // التأكد من أن الصفحة تبدأ من الأعلى عند التحديث
    setTimeout(function() {
        $(window).on('scroll', function() {
            // كود ScrollToFixed
            var scrollPos = $(this).scrollTop();
            if (scrollPos > 100) {
                // قم بتثبيت العنصر أو تغيير خصائصه هنا
            }
        });
    }, 1000); // تأخير 100 ملي ثانية
});


</script>
@endsection
