@extends('frontend.master')

@section('content')
<div class="container my-5 donation-form-box">
    <h2 class="text-center mb-4">Blood Donation Form</h2>

    <!-- نموذج التبرع بالدم مع الأسئلة الأساسية والإضافية للتحقق من أهلية المتبرع -->
<!-- Blood Donation Form with Essential Eligibility Questions -->
<form action="/submit-donation-form" method="POST">
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

    <!-- Phone Number -->
    <div class="mb-3">
        <label>Phone Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
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

    <!-- Age -->
    <div class="mb-3">
        <label>Age</label>
        <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
    </div>

    <!-- Weight -->
    <div class="mb-3">
        <label>Weight (kg)</label>
        <input type="number" name="weight" class="form-control" placeholder="Enter your weight" required>
    </div>

    <!-- Blood Pressure -->
    <div class="mb-3">
        <label>Do you have normal blood pressure?</label><br>
        <input type="radio" id="blood_pressure_normal" name="blood_pressure" value="normal" required>
        <label for="blood_pressure_normal">Yes</label>
        <input type="radio" id="blood_pressure_high" name="blood_pressure" value="high" required>
        <label for="blood_pressure_high">High</label>
        <input type="radio" id="blood_pressure_low" name="blood_pressure" value="low" required>
        <label for="blood_pressure_low">Low</label>
    </div>

    <!-- Pregnancy (for females) -->
    <div class="mb-3">
        <label>Are you pregnant? (for females)</label><br>
        <input type="radio" id="pregnant_yes" name="pregnant" value="yes">
        <label for="pregnant_yes">Yes</label>
        <input type="radio" id="pregnant_no" name="pregnant" value="no">
        <label for="pregnant_no">No</label>
    </div>

    <!-- Tattoo or Piercing -->
    <div class="mb-3">
        <label>Have you had a tattoo or piercing in the last six months?</label><br>
        <input type="radio" id="tattoo_piercing_yes" name="tattoo_piercing" value="yes" required>
        <label for="tattoo_piercing_yes">Yes</label>
        <input type="radio" id="tattoo_piercing_no" name="tattoo_piercing" value="no" required>
        <label for="tattoo_piercing_no">No</label>
    </div>

    <!-- General Health Status -->
    <div class="mb-3">
        <label>Do you feel healthy today?</label><br>
        <input type="radio" id="general_health_yes" name="general_health" value="yes" required>
        <label for="general_health_yes">Yes</label>
        <input type="radio" id="general_health_no" name="general_health" value="no" required>
        <label for="general_health_no">No</label>
    </div>

    <!-- Family Medical History (No Details Needed) -->
    <div class="mb-3">
        <label>Do you have a family medical history of any hereditary diseases?</label><br>
        <input type="radio" id="family_history_yes" name="family_history" value="yes" required>
        <label for="family_history_yes">Yes</label>
        <input type="radio" id="family_history_no" name="family_history" value="no" required>
        <label for="family_history_no">No</label>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
@endsection

@section('css')
<style>
    .donation-form-box {
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
    }
</style>
@endsection
@section('js')
    <script>
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
    }, 100); // تأخير 100 ملي ثانية
});

    </script>
@endsection