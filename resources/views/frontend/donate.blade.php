@extends('frontend.master')

@section('content')
<div class="container my-5 donation-form-box">
    <h2 class="text-center mb-4">Blood Donation Form</h2>

    <!-- نموذج التبرع بالدم -->
    <form action="{{route('storeDonate')}}" method="POST">
        @csrf

        <!-- Full Name -->
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
        </div>

        <!-- Email Address -->
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
        <!-- Phone Number -->
        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>

        <!-- Blood Type -->
        <div class="mb-3">
            <label>Blood Type</label>
            <select name="blood_type" class="form-control" required>
                <option value="">Select your blood type</option>
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

        <!-- Last Blood Donation -->
        <div class="mb-3">
            <label>Have you donated blood before?</label>
            <select name="donated_previously" class="form-control" required id="donated_previously">
                <option value="">Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <!-- If donated before, show the date field -->
        <div class="mb-3" id="donation_date_div" style="display:none;">
            <label>When was your last blood donation?</label>
            <input type="date" name="last_donation_date" class="form-control" id="donation_date" />
        </div>

        <!-- Recent Activities (Checkboxes) -->
        <div class="mb-3">
            <label>In the last six months, have you had any of the following?</label>
            <div>
                <input type="checkbox" name="recent_activities[]" value="Tattooing" id="tattooing">
                <label for="tattooing">Tattooing</label><br>
        
                <input type="checkbox" name="recent_activities[]" value="Ear piercing" id="ear_piercing">
                <label for="ear_piercing">Ear piercing</label><br>
        
                <input type="checkbox" name="recent_activities[]" value="Dental extraction" id="dental_extraction">
                <label for="dental_extraction">Dental extraction</label><br>
        
                <input type="checkbox" name="recent_activities[]" value="None" id="none_activities">
                <label for="none_activities">None of the above</label><br>
            </div>
            <!-- Hidden Textarea for details -->
            <textarea name="recent_activities_details" id="recent_activities_details" class="form-control" style="display:none;" placeholder="Please provide details if applicable"></textarea>
        </div>
        

        <!-- Diseases (Checkboxes) -->
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

        <!-- Medications (Checkboxes) -->
        <div class="mb-3">
            <label>Are you taking or have you taken any of these in the past 72 hours?</label>
            <div>
                <input type="checkbox" name="medications[]" value="Antibiotics" id="antibiotics" class="toggle-medications">
                <label for="antibiotics">Antibiotics</label><br>
        
                <input type="checkbox" name="medications[]" value="Steroids" id="steroids" class="toggle-medications">
                <label for="steroids">Steroids</label><br>
        
                <input type="checkbox" name="medications[]" value="Aspirin" id="aspirin" class="toggle-medications">
                <label for="aspirin">Aspirin</label><br>
        
                <input type="checkbox" name="medications[]" value="Vaccinations" id="vaccinations" class="toggle-medications">
                <label for="vaccinations">Vaccinations</label><br>
        
                <input type="checkbox" name="medications[]" value="Rabies Vaccine" id="rabies_vaccine" class="toggle-medications">
                <label for="rabies_vaccine">Dog bite Rabies vaccine (1 year)</label><br>
        
                <input type="checkbox" name="medications[]" value="Alcohol" id="alcohol" class="toggle-medications">
                <label for="alcohol">Alcohol</label><br>
        
                <input type="checkbox" name="medications[]" value="None" id="none_medications" class="toggle-medications">
                <label for="none_medications">None of the above</label><br>
            </div>
            <!-- Hidden Textarea for details -->
            <textarea name="medications_details" id="medications_details" class="form-control" style="display:none;" placeholder="Please provide details if applicable"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit Donation</button>
    </form>
</div>

@section('js');
        } else {
    

<script>
    // Show donation date input if "yes" is selected
    document.getElementById('donated_previously').addEventListener('change', function() {
        const donationDateDiv = document.getElementById('donation_date_div');
        if (this.value === 'yes') {
            donationDateDiv.style.display = 'block'
            donationDateDiv.style.display = 'none';
        }
    });

    document.querySelectorAll('input[name="chronic_diseases[]"]').forEach(function(input) {
        input.addEventListener('change', function() {
            var textArea = this.closest('.form-check').querySelector('textarea');
            textArea.style.display = this.checked ? 'block' : 'none';
        });
    });
//  -----
document.addEventListener('DOMContentLoaded', function() {
    const noneActivitiesCheckbox = document.getElementById('none_activities');
    const detailsTextarea = document.getElementById('recent_activities_details');
    
    // Hide textarea initially
    detailsTextarea.style.display = 'none';

    // Function to handle the checkbox selection
    noneActivitiesCheckbox.addEventListener('change', function() {
        if (this.checked) {
            // Show textarea when 'None of the above' is selected
            detailsTextarea.style.display = 'block';

            // Uncheck other checkboxes
            const otherCheckboxes = document.querySelectorAll('input[type="checkbox"]:not(#none_activities)');
            otherCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        } else {
            // Hide textarea when 'None of the above' is deselected
            detailsTextarea.style.display = 'none';
        }
    });

    // Hide textarea and uncheck 'None of the above' if any other checkbox is selected
    const otherCheckboxes = document.querySelectorAll('input[type="checkbox"]:not(#none_activities)');
    otherCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            noneActivitiesCheckbox.checked = false; // Uncheck 'None of the above'
            detailsTextarea.style.display = 'none'; // Hide textarea
        });
    });
});


    document.querySelectorAll('.toggle-medications').forEach(input => {
        input.addEventListener('change', function () {
            const noneCheckbox = document.getElementById('none_medications');
            const detailsTextarea = document.getElementById('medications_details');

            if (noneCheckbox.checked) {
                detailsTextarea.style.display = 'block';
                document.querySelectorAll('.toggle-medications').forEach(otherInput => {
                    if (otherInput !== noneCheckbox) {
                        otherInput.checked = false;
                    }
                });
            } else {
                detailsTextarea.style.display = 'none';
            }
        });
    });
    


$(document).ready(function() {
    window.scrollTo(0); // التأكد من أن الصفحة تبدأ من الأعلى عند التحديث
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
@endsection
