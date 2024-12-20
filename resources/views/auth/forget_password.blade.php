@extends('layouts.index')
@section('content')
    
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Forgot Password</h1>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-md-1"></div>
                <div class="col-lg-8 col-md-10">
                    <div class="forgot">
                      	<h2>Forgot your password?</h2>
                        <p>Change your password in three easy steps. This will help you to secure your password!</p>
                        <ol class="list-unstyled">
                            <li><span class="text-medium">1. </span>Enter your email address below.</li>
                            <li><span class="text-medium">2. </span>Our system will send you a temporary link</li>
                            <li><span class="text-medium">3. </span>Use the link to reset your password</li>
                        </ol>
                    </div>	
                  
                    <form class="card mt-4" action="{{ url('send/otp') }}" method="post">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email-for-pass">Enter your email address</label>
                                <input class="form-control" type="text" id="email-for-pass" name="email" ><small class="form-text text-muted">Enter the email address you used during the registration on Waamde.com. Then we'll email a link to this address.</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="butn-dark2 mr-2"><span>Get New Password</span></button>
                        
                            <a href="{{ url('login') }}" class="butn-dark2">Back to Login</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-1"></div>
            </div>
        </div>
	</section>
@endsection