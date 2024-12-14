@extends('frontend.master')
@section('content')  

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
       <div class="carousel-item active">
           <img class="d-block w-100" src="{{asset('frontend/assets/images/slider/slide-02.jpg')}}" alt="First slide">
           <div class="carousel-caption d-none d-md-block">
               <h5 class="bounceInDown">Donate Blood & Save a Life</h5>
               <p class="bounceInLeft">Donating blood is a simple process that can make a huge difference in someone’s life. At [Site Name], we’ve streamlined the donation process to ensure that it is as easy and safe as possible for both the donors and recipients. The procedure involves a few simple steps: registration, a quick health check, the donation itself, and post-donation care. Our goal is to make blood donation an accessible and straightforward experience for all, ensuring that hospitals and medical centers always have a steady supply of blood available for those in need.</p>
               
               <div class="vbh">
                   <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}">Donation Procedures</a></div>
                   <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Request Blood</a></div>
               </div>
           </div>
       </div>
   </div>
</div>

<section id="process" class="donation-care">
   <div class="container">
       <div class="row session-title">
           <h2>Donation Process</h2>
           <p>Learn about the donation process from the time you arrive at the center until you leave.</p>
       </div>
       <div class="row">
        <!-- 1st Blood Collection Step -->
        <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu blood-step">
                <img src="{{asset('frontend/assets/images/gallery/g1.jpg')}}" alt="">
                <h4><b>1 - </b>Arrival at the Center</h4>
                <p>When you arrive at the donation center, the first step is to register your personal details and fill out a health questionnaire. Our staff will then guide you to the screening area.</p>
                <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}">Donation Procedures</a></div>

            </div>
        </div>
        <!-- 2nd Blood Collection Step -->
        <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu blood-step">
                <img src="{{asset('frontend/assets/images/gallery/g2.jpg')}}" alt="">
                <h4><b>2 - </b>Initial Health Check</h4>
                <p>We will assess your overall health, including checking your blood pressure, blood sugar levels, and weight. You will also be asked about your medical history to ensure you are fit to donate blood.</p>
                <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}">Donation Procedures</a></div>

            </div>
        </div>
        <!-- 3rd Blood Collection Step -->
        <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu blood-step">
                <img src="{{asset('frontend/assets/images/gallery/g3.jpg')}}" alt="">
                <h4><b>3 - </b>Blood Collection</h4>
                <p>Once you're cleared to donate, a trained medical professional will take your blood. The donation process usually takes between 10 to 15 minutes, depending on the type of donation.</p>
                <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}">Donation Procedures</a></div>
            </div>
        </div>
        <!-- 4th Blood Collection Step -->
        <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu blood-step">
                <img src="{{asset('frontend/assets/images/gallery/g4.jpg')}}" alt="">
                <h4><b>4 - </b>Rest Period After Blood Collection</h4>
                <p>After donating, you will be asked to rest for a few minutes. During this time, we will monitor your condition to ensure you're feeling comfortable. You'll then be given a snack to help replenish your energy before you leave the center.</p>
                <div class="btn btn-success bounceInUp"><a href="{{route('donateInfo')}}">Donation Procedures</a></div>
            </div>
        </div>
    </div>
    
       <div class="row session-title">
           <h2>Donation Process Complete</h2>
           <p>By following these steps, you contribute to saving lives and providing much-needed assistance to those in need.</p>
       </div>
   </div>
</section>

<section id="process" class="donation-care">
   <div class="container">
       <div class="row session-title">
           <h2>Blood Collection Process</h2>
           <p>The process of receiving blood from the moment you arrive at the center until the time you leave.</p>
       </div>
       <div class="row">
           <!-- 1st Blood Collection Step -->
           <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu blood-step">
                   <img src="{{asset('frontend/assets/images/gallery/g1.jpg')}}" alt="">
                   <h4><b>1 - </b>Arrival at the Center</h4>
                   <p>Upon arrival, you'll register your details and complete a health form. After that, you will be guided to the screening area.</p>
                   <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Request Blood</a></div>
               </div>
           </div>
           <!-- 2nd Blood Collection Step -->
           <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu blood-step">
                   <img src="{{asset('frontend/assets/images/gallery/g2.jpg')}}" alt="">
                   <h4><b>2 - </b>Initial Health Check</h4>
                   <p>Your health will be checked, including blood pressure and blood sugar, and your medical history will be reviewed to determine if you're eligible to donate.</p>
                   <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Request Blood</a></div>
               </div>
           </div>
           <!-- 3rd Blood Collection Step -->
           <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu blood-step">
                   <img src="{{asset('frontend/assets/images/gallery/g3.jpg')}}" alt="">
                   <h4><b>3 - </b>Blood Collection</h4>
                   <p>Once confirmed eligible, the blood collection process will be performed under medical supervision, usually taking between 10 to 15 minutes.</p>
                   <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Request Blood</a></div>
               </div>
           </div>
           <!-- 4th Blood Collection Step -->
           <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu blood-step">
                   <img src="{{asset('frontend/assets/images/gallery/g4.jpg')}}" alt="">
                   <h4><b>4 - </b>Rest Period After Blood Collection</h4>
                   <p>You will rest for a few minutes after the donation to ensure you're feeling well. You'll be offered a light snack to help you recover before leaving the center.</p>
                   <div class="btn btn-success bounceInUp"><a href="{{route('requestingPage')}}">Request Blood</a></div>
               </div>
           </div>
       </div>
       <div class="row session-title">
           <h2>Blood Collection Process Complete</h2>
           <p>By following this process, you will help save lives and provide assistance to those in need.</p>
       </div>
   </div>
</section>

@endsection

@section('css')
<style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .donation-card, .blood-step {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
        background-color: #f9f9f9;
        transition: transform 0.3s ease;
        border-radius: 8px;
    }

    .donation-step:hover, .blood-step:hover {
        transform: scale(1.05);
    }

    .donation-step img, .blood-step img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        flex-shrink: 0;
    }

    .donation-step h4, .blood-step h4, .donation-step p, .blood-step p {
        margin-top: 10px;
        flex-grow: 1;
    }

    .donation-step .btn, .blood-step .btn {
        margin-top: auto;
        align-self: center;
    }
    .vbh .btn a {
    color: white !important;  /* تغيير لون النص إلى الأبيض */
    text-decoration: none; /* إزالة أي خط تحت النص */
}
.blood-step .btn a {
    color: white !important;  /* تغيير لون النص إلى الأبيض */
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