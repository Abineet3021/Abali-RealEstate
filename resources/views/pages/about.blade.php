@php
    $about = \DB::table('about')->select('*')->first();
    $contact = \DB::table('contact')->select('*')->first();
@endphp

@extends('layouts.index')
@section('content')
<div
      class="banner-header section-padding valign bg-img bg-fixed"
      data-overlay-dark="4"
      data-background="{{asset('frontend/img/slider/1.jpg') }}"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-12 caption mt-90">
            <h5>Luxury Hotel</h5>
            <h1>About Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 mb-30 animate-box"
            data-animate-effect="fadeInUp"
          >
            <span>
              <i class="star-rating"></i>
              <i class="star-rating"></i>
              <i class="star-rating"></i>
              <i class="star-rating"></i>
              <i class="star-rating"></i>
            </span>
            <div class="section-subtitle">The Cappa Luxury Hotel</div>
            <div class="section-title">{{$about->title ?? ''}}</div>
            {!! ($about->description ?? '') !!}
            <!-- reservation -->
            <div class="reservations">
              <div class="icon"><span class="flaticon-call"></span></div>
              <div class="text">
                <p>Reservation</p>
                <a href="tel:855-100-4444">{{$contact->phone ?? ''}}</a>
              </div>
            </div>
          </div>
          <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
            <img src="{{ $about->image ?? '' }}" alt="" class="mt-90 mb-30" />
          </div>
          <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
            <img src="{{ $about->image1 ?? '' }}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing -->
    <!--<section class="pricing section-padding bg-blck">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-4">-->
    <!--        <div class="section-subtitle"><span>Best Prices</span></div>-->
    <!--        <div class="section-title"><span>Extra Services</span></div>-->
    <!--        <p class="color-2">-->
    <!--          The best prices for your relaxing vacation. The utanislen quam-->
    <!--          nestibulum ac quame odion elementum sceisue the aucan.-->
    <!--        </p>-->
    <!--        <p class="color-2">-->
    <!--          Orci varius natoque penatibus et magnis disney parturient monte-->
    <!--          nascete ridiculus mus nellen etesque habitant morbine.-->
    <!--        </p>-->
    <!--        <div class="reservations mb-30">-->
    <!--          <div class="icon"><span class="flaticon-call"></span></div>-->
    <!--          <div class="text">-->
    <!--            <p class="color-2">For information</p>-->
    <!--            <a href="tel:855-100-4444">855 100 4444</a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-8">-->
    <!--        <div class="owl-carousel owl-theme">-->
    <!--          <div class="pricing-card">-->
    <!--            <img src="{{asset('frontend/img/pricing/1.jpg') }}" alt="" />-->
    <!--            <div class="desc">-->
    <!--              <div class="name">Room cleaning</div>-->
    <!--              <div class="amount">$50<span>/ month</span></div>-->
    <!--              <ul class="list-unstyled list">-->
    <!--                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>-->
    <!--                <li>-->
    <!--                  <i class="ti-check"></i> Orci miss natoque vasa ince-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                  <i class="ti-close unavailable"></i>Clean sorem ipsum-->
    <!--                  morbin-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="pricing-card">-->
    <!--            <img src="{{asset('frontend/img/pricing/2.jpg') }}" alt="" />-->
    <!--            <div class="desc">-->
    <!--              <div class="name">Drinks included</div>-->
    <!--              <div class="amount">$30<span>/ daily</span></div>-->
    <!--              <ul class="list-unstyled list">-->
    <!--                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>-->
    <!--                <li>-->
    <!--                  <i class="ti-check"></i> Orci miss natoque vasa ince-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                  <i class="ti-close unavailable"></i>Clean sorem ipsum-->
    <!--                  morbin-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="pricing-card">-->
    <!--            <img src="{{asset('frontend/img/pricing/3.jpg') }}" alt="" />-->
    <!--            <div class="desc">-->
    <!--              <div class="name">Room Breakfast</div>-->
    <!--              <div class="amount">$30<span>/ daily</span></div>-->
    <!--              <ul class="list-unstyled list">-->
    <!--                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>-->
    <!--                <li>-->
    <!--                  <i class="ti-check"></i> Orci miss natoque vasa ince-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                  <i class="ti-close unavailable"></i>Clean sorem ipsum-->
    <!--                  morbin-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="pricing-card">-->
    <!--            <img src="{{asset('frontend/img/pricing/4.jpg') }}" alt="" />-->
    <!--            <div class="desc">-->
    <!--              <div class="name">Safe & Secure</div>-->
    <!--              <div class="amount">$15<span>/ daily</span></div>-->
    <!--              <ul class="list-unstyled list">-->
    <!--                <li><i class="ti-check"></i> Hotel ut nisan the duru</li>-->
    <!--                <li>-->
    <!--                  <i class="ti-check"></i> Orci miss natoque vasa ince-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                  <i class="ti-close unavailable"></i>Clean sorem ipsum-->
    <!--                  morbin-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- Facilties -->
    <!--<section class="facilties section-padding">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12">-->
    <!--        <div class="section-subtitle">Our Services</div>-->
    <!--        <div class="section-title">Hotel Facilities</div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-world"></span>-->
    <!--          <h5>Pick Up & Drop</h5>-->
    <!--          <p>-->
    <!--            We’ll pick up from airport while you comfy on your ride, mus-->
    <!--            nellentesque habitant.-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-world"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-car"></span>-->
    <!--          <h5>Parking Space</h5>-->
    <!--          <p>-->
    <!--            Fusce tincidunt nis ace park norttito sit amet space, mus-->
    <!--            nellentesque habitant.-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-car"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-bed"></span>-->
    <!--          <h5>Room Service</h5>-->
    <!--          <p>-->
    <!--            Room tincidunt nis ace park norttito sit amet space, mus-->
    <!--            nellentesque habitant.-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-bed"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-swimming"></span>-->
    <!--          <h5>Swimming Pool</h5>-->
    <!--          <p>-->
    <!--            Swimming pool tincidunt nise ace park norttito sit space, mus-->
    <!--            nellentesque habitant.-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-swimming"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-wifi"></span>-->
    <!--          <h5>Fibre Internet</h5>-->
    <!--          <p>-->
    <!--            Wifi tincidunt nis ace park norttito sit amet space, mus-->
    <!--            nellentesque habitant.-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-wifi"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div-->
    <!--          class="single-facility animate-box"-->
    <!--          data-animate-effect="fadeInUp"-->
    <!--        >-->
    <!--          <span class="flaticon-breakfast"></span>-->
    <!--          <h5>Breakfast</h5>-->
    <!--          <p>-->
    <!--            Eat tincidunt nisa ace park norttito sit amet space, mus-->
    <!--            nellentesque habitant-->
    <!--          </p>-->
    <!--          <div class="facility-shape">-->
    <!--            <span class="flaticon-breakfast"></span>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- Team -->
    <!--<section class="team section-padding bg-cream">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12">-->
    <!--        <div class="section-subtitle">Professionals</div>-->
    <!--        <div class="section-title">Meet The Team</div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12 owl-carousel owl-theme">-->
    <!--        <div class="item">-->
    <!--          <div class="img"><img src="{{asset('frontend/img/team/4.jpg') }}" alt="" /></div>-->
    <!--          <div class="info">-->
    <!--            <h6>Valentina Karla</h6>-->
    <!--            <p>General Manager</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="full-width">-->
    <!--                <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                <p>valentina@hotel.com</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="item">-->
    <!--          <div class="img">-->
    <!--            <img src="{{asset('frontend/img/team/1.jpg') }}" alt="" />-->
    <!--          </div>-->
    <!--          <div class="info">-->
    <!--            <h6>Micheal White</h6>-->
    <!--            <p>Guest Service Department</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="full-width">-->
    <!--                <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                <p>micheal@hotel.com</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="item">-->
    <!--          <div class="img"><img src="{{asset('frontend/img/team/2.jpg') }}" alt="" /></div>-->
    <!--          <div class="info">-->
    <!--            <h6>Olivia Martin</h6>-->
    <!--            <p>Reservations Manager</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="social valign">-->
    <!--                <div class="full-width">-->
    <!--                  <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                  <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                  <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                  <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                  <p>olivia@hotel.com</p>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="item">-->
    <!--          <div class="img"><img src="{{asset('frontend/img/team/5.jpg') }}" alt="" /></div>-->
    <!--          <div class="info">-->
    <!--            <h6>Mariana Dana</h6>-->
    <!--            <p>F&B Manager</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="full-width">-->
    <!--                <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                <p>mariana@hotel.com</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="item">-->
    <!--          <div class="img"><img src="{{asset('frontend/img/team/3.jpg') }}" alt="" /></div>-->
    <!--          <div class="info">-->
    <!--            <h6>Enrico Brown</h6>-->
    <!--            <p>Head Chef</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="full-width">-->
    <!--                <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                <p>enrico@hotel.com</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="item">-->
    <!--          <div class="img"><img src="{{asset('frontend/img/team/6.jpg') }}" alt="" /></div>-->
    <!--          <div class="info">-->
    <!--            <h6>Victoria Dan</h6>-->
    <!--            <p>Meetings and Events Manager</p>-->
    <!--            <div class="social valign">-->
    <!--              <div class="full-width">-->
    <!--                <a href="#"><i class="ti-instagram"></i></a>-->
    <!--                <a href="#"><i class="ti-twitter"></i></a>-->
    <!--                <a href="#"><i class="ti-facebook"></i></a>-->
    <!--                <a href="#"><i class="ti-pinterest"></i></a>-->
    <!--                <p>victoria@hotel.com</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- Testiominals -->
    <!--<section class="testimonials">-->
    <!--  <div-->
    <!--    class="background bg-img bg-fixed section-padding pb-0"-->
    <!--    data-background="{{asset('frontend/img/slider/2.jpg') }}"-->
    <!--    data-overlay-dark="3"-->
    <!--  >-->
    <!--    <div class="container">-->
    <!--      <div class="row">-->
    <!--        <div class="col-md-8 offset-md-2">-->
    <!--          <div class="testimonials-box">-->
    <!--            <div class="head-box">-->
    <!--              <h6>Testimonials</h6>-->
    <!--              <h4>What Client's Say?</h4>-->
    <!--              <div class="line"></div>-->
    <!--            </div>-->
    <!--            <div class="owl-carousel owl-theme">-->
    <!--              <div class="item">-->
    <!--                <span class="quote"><img src="{{asset('frontend/img/quot.png') }}" alt="" /></span>-->
    <!--                <p>-->
    <!--                  Hotel dapibus asue metus the nec feusiate eraten miss-->
    <!--                  hendreri net ve ante the lemon sanleo nectan feugiat erat-->
    <!--                  hendrerit necuis ve ante otel inilla duiman at finibus-->
    <!--                  viverra neca the sene on satien the miss drana inc fermen-->
    <!--                  norttito sit space, mus nellentesque habitan.-->
    <!--                </p>-->
    <!--                <div class="info">-->
    <!--                  <div class="author-img">-->
    <!--                    <img src="{{asset('frontend/img/team/4.jpg') }}" alt="" />-->
    <!--                  </div>-->
    <!--                  <div class="cont">-->
    <!--                    <span>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                    </span>-->
    <!--                    <h6>Emily Brown</h6>-->
    <!--                    <span>Guest review</span>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="item">-->
    <!--                <span class="quote"><img src="{{asset('frontend/img/quot.png') }}" alt="" /></span>-->
    <!--                <p>-->
    <!--                  Hotel dapibus asue metus the nec feusiate eraten miss-->
    <!--                  hendreri net ve ante the lemon sanleo nectan feugiat erat-->
    <!--                  hendrerit necuis ve ante otel inilla duiman at finibus-->
    <!--                  viverra neca the sene on satien the miss drana inc fermen-->
    <!--                  norttito sit space, mus nellentesque habitan.-->
    <!--                </p>-->
    <!--                <div class="info">-->
    <!--                  <div class="author-img">-->
    <!--                    <img src="{{asset('frontend/img/team/1.jpg') }}" alt="" />-->
    <!--                  </div>-->
    <!--                  <div class="cont">-->
    <!--                    <span>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                    </span>-->
    <!--                    <h6>Nolan White</h6>-->
    <!--                    <span>Guest review</span>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="item">-->
    <!--                <span class="quote"><img src="{{asset('frontend/img/quot.png') }}" alt="" /></span>-->
    <!--                <p>-->
    <!--                  Hotel dapibus asue metus the nec feusiate eraten miss-->
    <!--                  hendreri net ve ante the lemon sanleo nectan feugiat erat-->
    <!--                  hendrerit necuis ve ante otel inilla duiman at finibus-->
    <!--                  viverra neca the sene on satien the miss drana inc fermen-->
    <!--                  norttito sit space, mus nellentesque habitan.-->
    <!--                </p>-->
    <!--                <div class="info">-->
    <!--                  <div class="author-img">-->
    <!--                    <img src="{{asset('frontend/img/team/5.jpg') }}" alt="" />-->
    <!--                  </div>-->
    <!--                  <div class="cont">-->
    <!--                    <span>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                      <i class="star-rating"></i>-->
    <!--                    </span>-->
    <!--                    <h6>Olivia Martin</h6>-->
    <!--                    <span>Guest review</span>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

@endsection