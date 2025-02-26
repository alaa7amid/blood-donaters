@extends('frontend.master')

@section('content')
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('frontend/assets/images/gallery/g7.jpg')}}" alt="First slide" style="height: 70vh">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="bounceInDown">Donate Blood & Save a Life</h5>
                <p class="bounceInLeft">Your blood donation could be the difference between life and death. At [Site Name], we work to make the blood donation process easier and safer for both donors and those in need of blood. Our goal is to gather as many blood donors as possible to ensure a continuous supply of blood for hospitals and medical centers, and to act as a bridge between individuals willing to donate and those in need of blood.</p>

                <div class="vbh">
                    <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}"> Donate now </a></div>
                    <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Requesting now</a></div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('frontend/assets/images/slider/slide-03.jpg')}}" alt="Third slide" style="height: 70vh">
            <div class="carousel-caption vdg-cur d-none d-md-block">
                <h5 class="bounceInDown">Request Blood & Receive Life-Saving Support</h5>
                <p class="bounceInLeft">At [Site Name], we understand that medical emergencies requiring blood can be overwhelming. That’s why we’re committed to providing a reliable platform where individuals or healthcare institutions can request the blood they urgently need. Our mission is to connect those in need with available blood donors, ensuring a timely response and helping to save lives in critical situations. We strive to make this process as simple and efficient as possible for both requesters and donors.</p>

                <div class="vbh">
                    <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}"> Donate now </a></div>
                    <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Requesting now</a></div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}
@endsection

@section('css')
<style>
    .vbh .btn a {
        color: white;  /* تغيير لون النص إلى الأبيض */
        text-decoration: none; /* إزالة أي خط تحت النص */
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