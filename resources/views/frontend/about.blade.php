@extends('frontend.master')

@section('content')
<section id="about" class="container-fluid about-us py-5">
    <div class="container">
        <!-- Title Section -->
        <div class="row session-title text-center mb-4">
            <h2 style="color: #000000;">Welcome to the Blood Bank</h2>
            <p style="color: #000000;">Saving lives, one drop at a time.</p>
        </div>

        <!-- About Us Content -->
        <div class="row">
            <!-- Text Section -->
            <div class="col-md-6">
                <p style="color: #000000;">
                    At Blood Bank, we understand that blood donation is more than an act of giving; it is a humanitarian message that brings hope and life. We are a comprehensive platform designed to facilitate communication between donors and recipients, meeting the needs of hospitals and medical centers efficiently and quickly.
                </p>
                <h3 style="color: #000000;">What We Offer</h3>
                <ul style="color: #000000;">
                    <li><strong>Advanced Blood Search Service:</strong> Our site allows hospitals, healthcare centers, and individuals to search for available blood types with speed and accuracy, ensuring that the required blood is obtained as quickly as possible.</li>
                    <li><strong>Information for Donors and Recipients:</strong> We provide detailed information and guidelines to help donors understand the donation process and its benefits, as well as guidance for recipients on blood transfusion and its conditions.</li>
                    <li><strong>Direct Communication:</strong> Through our platform, we facilitate communication between donors and hospitals, coordinating donation campaigns effectively in emergency situations.</li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/images/about.jpg') }}" alt="About Blood Bank" class="img-fluid rounded">
            </div>
        </div>

        <!-- Vision Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 style="color: #000000;">Our Vision</h3>
                <p style="color: #000000;">
                    We aim for Blood Bank to be the first choice for those looking to donate blood or find specific blood types to save lives. Our goal is to build a digital community that supports the well-being of individuals and enhances connections between donors and those in need.
                </p>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 style="color: #000000;">Our Mission</h3>
                <p style="color: #000000;">
                    Our mission is to simplify the blood donation process and create a network that links individuals willing to donate blood with hospitals that need it. We are committed to providing safe and user-friendly digital services, helping to increase donation rates and support the healthcare system.
                </p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 style="color: #000000;">Our Values</h3>
                <ul style="color: #000000;">
                    <li><strong>Safety:</strong> We adhere to the highest safety standards to ensure safe and reliable blood.</li>
                    <li><strong>Transparency:</strong> We prioritize clarity and reliability in every step, strengthening the trust of donors and recipients.</li>
                    <li><strong>Speed and Efficiency:</strong> Our goal is to fulfill requests as quickly as possible to meet patient needs.</li>
                    <li><strong>Humanity and Responsibility:</strong> We believe every donation is a chance to save a life, and we take responsibility for continuously improving our service quality.</li>
                </ul>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 style="color: #000000;">Why Choose Blood Bank?</h3>
                <p style="color: #000000;">
                    Blood Bank is your ideal partner if you are looking for a safe and fast way to donate or receive blood. Through our integrated digital system, we offer an easy way to search for blood types, register as a donor, and stay informed about urgent donation needs in your area.
                </p>
                <p style="color: #000000;">
                    Join us in supporting the community, and be part of this humanitarian mission that brings hope and new life to others.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
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
    }, 100); // تأخير 100 ملي ثانية
});

    </script>
@endsection