@extends('frontend.master')

@section('content')
<div class="container my-5 confirmation-page">
    <h2 class="text-center mb-4 text-success">Your information has been successfully submitted</h2>
    <p class="text-center">Thank you for providing your details. You will be notified about the date soon:</p>
    
    {{-- <h3 class="text-center text-danger" id="donation-date"></h3> --}}
</div>
@endsection





@section('css')
<style>
    .confirmation-page {
        background-color: #f9f9f9;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('js')
<script>
    // حساب التاريخ المقترح للتبرع بعد 30 يومًا
    function calculateDonationDate() {
        const today = new Date();
        const donationDate = new Date(today);
        donationDate.setDate(today.getDate() );

        // صياغة التاريخ بالشكل المطلوب
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('donation-date').innerText = donationDate.toLocaleDateString('ar-EG', options);
    }

    // تنفيذ الوظيفة عند تحميل الصفحة
    window.onload = calculateDonationDate;
</script>
@endsection
