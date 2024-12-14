<footer id="contact" class="container-fluid pt-4" >
    <div class="container">
        @php
            use App\Models\setting;
            use Illuminate\Support\Facades\Auth;
            $setting = setting::first();
        @endphp
        <div class="row content-ro">
            <div class="col-lg-4 col-md-12 footer-contact">
                <h2>Contact Informatins</h2>
                <div class="address-row" style="display: flex; align-items: center;">
                    <div class="icon" style="margin-right: 10px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="detail">
                        <p>{{$setting->location}}</p>
                    </div>
                </div>
                
                <div class="address-row" style="display: flex; align-items: center;">
                    <div class="icon" style="margin-right: 10px;">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div>
                        <p>{{$setting->email}}</p>
                    </div>
                </div>
                
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="detail">
                        <p>{{$setting->phone1}} <br> {{$setting->phone2}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 footer-links">
               <div class="row no-margin mt-2">
                <h2>Quick Links</h2>
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Contacts</li>
                    <li>Pricing</li>
                    <li>Gallery</li>
                    <li>eatures</li>

                </ul>
                </div>
               <div class="row no-margin mt-1">
                   <h2 class="m-t-2">More Products</h2>
                 <ul>
                    <li>Forum PHP Script</li>
                    <li>Edu Smart</li>
                    <li>Smart Event</li>
                    <li>Smart School</li>


                </ul>
               </div>

            </div>
            <div class="col-lg-4 col-md-12 footer-form">
                <div class="form-card">
                    <div class="form-title">
                        <h4>Login</h4>
                    </div>
                    <div class="form-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required autofocus>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            <button class="btn btn-sm btn-primary w-100" type="submit">Login</button>
                        </form>
                        <div class="mt-3 text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer-copy">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    {{-- <p>Copyright © <a href="https://www.smarteyeapps.com">Smarteyeapps.com</a> | All right reserved.</p> --}}
                </div>
                <div class="col-lg-4 col-md-6 socila-link">
                    <ul>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</footer>