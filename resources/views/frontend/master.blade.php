<!doctype html>
<html lang="en">

{{-- section of head --}}
@include('frontend.layout.head')

@yield('css')
<body>
    {{-- section of header --}}
    @include('frontend.layout.header')
        
        
        
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        @yield('content')

    </div>
    

    
          
    
      <!-- ################# Gallery Start Here #######################--->
{{--      
      <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="gg-box d-flex overflow-x-auto gap-4">
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g1.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g2.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g3.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g4.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g5.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g6.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g7.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g8.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g9.jpg')}}">
                    </div>
                    <div class="gg-element">
                        <img src="{{asset('frontend/assets/images/gallery/g10.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    
    
    
    
     
     
     
     
         <!--################### Our Blog Starts Here #######################--->
         <div id="blog" class="blog-container container-fluid">
            <div class="container">
                
                <!-- Motivational Tips Section -->
                <div class="session-title row text-center mt-5 mb-4">
                    <h2>Motivational Tips for Donating</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Why Donate Blood with Us?</h5>
                                <p class="card-text">Your donation with us is an opportunity to save a life. Every drop of blood given brings renewed hope to a patient and relief to a family facing difficult circumstances.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Every Donation Saves a Life</h5>
                                <p class="card-text">Remember, your donation could be the difference between life and death for someone in urgent need of blood.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Your Donation Can Help More Than One Person</h5>
                                <p class="card-text">Blood can be separated into its essential components, meaning a single donation can help more than one patient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Improve Your Own Health</h5>
                                <p class="card-text">Studies have shown that blood donation can help reduce excess iron levels in the body and support heart health.</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Recipient Tips Section -->
                <div class="session-title row text-center mt-5 mb-4">
                    <h2>Motivational Tips and Procedures for Blood Recipients</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Why Blood Donation Matters to You</h5>
                                <p class="card-text">Receiving a blood donation is more than just a medical procedure—it’s a gift of life. Every unit of blood carries the support of a generous donor who wishes you well.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Before Receiving Blood</h5>
                                <p class="card-text">Consult your doctor to confirm specific blood type requirements and ensure the blood has been thoroughly screened for safety.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">During the Transfusion</h5>
                                <p class="card-text">Stay calm and relaxed. The medical team will monitor your vitals to ensure a comfortable process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-row" style="height: 200px;">
                            <img src="{{asset('frontend/assets/images/blog/blog_01.jpg')}}" alt="Blog Image" style="width: 150px; height: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">After Receiving Blood</h5>
                                <p class="card-text">Take it easy, stay hydrated, and avoid strenuous activities for a few hours to help your body adjust.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        

     
     

   
      <!--*************** Footer  Starts Here *************** -->
    @include('frontend.layout.footer')
    
    
</body>
@include('frontend.layout.script')

@yield('js')

</html>
