<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <title>Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--  For a5uto serach - -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!--  For date - -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="travel/css/style.css">
  </head>
  <body>
    <section class="menu-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="menu-address">
              <a href="mailto:travelarchitectbd@gmail.com"><p><i class="bi bi-envelope"></i> travelarchitectbd@gmail.com</p></a>
              <a href="tel:01833-333544"><p><i class="bi bi-telephone"></i> 01833-333-544</p></a>
              <p><i class="bi bi-geo-alt"></i> Dhaka, Bangladesh</p>
            </div>
          </div>
          <div class="col-md-6 menu-socile">
            <ul style="display: flex;
          display: inline-flex;margin-bottom:0px;">
            <li><a href="https://www.facebook.com/Travelarchitectbd/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/travel-architect/"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/travelarchitectbd/"><i class="bi bi-instagram"></i></a></li>
          </ul>
          </div>
        </div>
      </div>
    </section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="travel/image/logo.png" alt="Logo-img" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('website.package')}}">Tour Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://travel-blog.plusdevelopment.online/">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('visa-guide')}}">Visa Guide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('flight')}}">Flight-Book</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a href="{{route('website.package')}}"><button type="button" class="btn btn-outline-warning">Book Now</button></a>
            </form>
          </div>
        </div>
    </nav>
<section class="home-search-bar-section">

        {{-- <img src="travel/image/01.jpg" class="img-fluid"> --}}

      <div class="hero-video pc">
        <video  class="pc" loop="true" autoplay="autoplay"  muted>
          <source src="travel/image/pcnew.webm" type="video/mp4">
        </video>
        <div class="text">
        <p>Come with us</p>
        <h1>Relax and Enjoy.</h1>
        <form action="{{ route('website.package.search') }}" method="GET">
          @csrf
          <div class="input-group search" style="height: 60px;">
          <select class="form-select select2 " id="inputGroupSelect02" name="title" required>
            <option selected> <i class="bi bi-geo-alt-fill"></i> CHOOSE YOUR DESTINATION</option>
            @foreach($places as $place_name)
            <option  value="{{$place_name->place_name}}">{{$place_name->place_name}}</option>
            @endforeach
          </select>

            <button type="submit" class="btn btn-warning" style="border-radius: 0px;">FIND NOW</button>
          </div>
        </form>
        </div>
      </div>

      <div class="hero-video phone">
        <video class="phone" loop="true" autoplay="autoplay"  muted style="z-index: 0">
          <source src="travel/image/phone.webm" type="video/mp4">
        </video>
        <div class="text">
        <p>Come with us</p>
        <h1>Relax and Enjoy.</h1>
        <form action="{{ route('website.package.search') }}" method="GET">
          @csrf
          <div class="input-group search">
          <select class="form-select select2 " id="inputGroupSelect02" name="title" required>
            <option selected> <i class="bi bi-geo-alt-fill"></i> choose your destination</option>
            @foreach($places as $place_name)
            <option  value="{{$place_name->place_name}}">{{$place_name->place_name}}</option>
            @endforeach
          </select>

            <button type="submit" class="btn btn-warning" style="border-radius: 0px;">FIND NOW</button>
          </div>
        </form>
        </div>
      </div>
    {{-- <div class="container-fluid" style="background: #fff;">
        <div class="row my-travel-search">
        <div class="col-md-3"></div>

        <div class="col-md-6">
          <form action="{{ route('website.package.search') }}" method="GET">
            @csrf
            <div class="input-group">
            <select class="form-select select2 " id="inputGroupSelect02">
              <option selected> <i class="bi bi-geo-alt-fill"></i> choose your destination</option>
              @foreach($places as $place_name)
              <option  value="{{$place_name->place_name}}">{{$place_name->place_name}}</option>
              @endforeach
            </select>

              <button type="submit" class="btn btn-warning" style="border-radius: 0px;">FIND NOW</button>
            </div>
          </form>
        </div>

        <div class="col-md-3"></div>
        </div>
    </div> --}}
</section>
<section class="our-service ">
  <h1>Service</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="single-service">
          <img src="{{asset('travel/image/service/01.png')}}" alt="" class="img-fluid">
          <h5>Air Ticketing</h5>
          <p>soar to New Heights with Travel Architect! Unlock exclusive airfare deals and seamless booking. Fly high with us</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-service">
          <img src="{{asset('travel/image/service/02.png')}}" alt="" class="img-fluid">
          <h5>Tour Packages</h5>
          <p>Journey beyond the ordinary with us! Experience the thrill of discovery and the comfort of expert planning.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-service">
          <img src="{{asset('travel/image/service/03.png')}}" alt="" class="img-fluid">
          <h5>Hotel Booking</h5>
          <p> Comfort meets convenience at Travel Architect! Our hotel booking service connects you with the best accommodations for your travel needs.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-service">
          <img src="{{asset('travel/image/service/04.png')}}" alt="" class="img-fluid">
          <h5>Air Ticketing</h5>
          <p>soar to New Heights with Travel Architect! Unlock exclusive airfare deals and seamless booking. Fly high with us</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="holiday-plan bg">
  <h4>Plan The</h4>
  <h2>Perfect Holiday</h2>

  <div class="container">
    <div class="row">

      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
          @foreach($tours as $tour)
          <div class="swiper-slide Destination" style="background: transparent;">
            <div class="home-tour-pakeg">
              <img src="{{asset($tour->package_image)}}" alt="" class="img-fluid">
              <div class="holiday-plan-place">
                <p><i class="bi bi-geo-alt-fill" style="color: #3c486b;"></i> {!! $tour->place->place_name !!}</p>
                <p><i class="bi bi-clock-fill" style="color: #3c486b;"></i> {{ Carbon\Carbon::createFromDate($tour->tour_start_date)->diffInDays($tour->tour_end_date) }} Days</p>
              </div>
              <div class="tours">
                <div class="tour-details">
                  <a href="{{route('package-detail',$tour->id)}}"><h3>{!! Str::limit($tour->tour_title,20, ' ...') !!} </h3></a>

                </div>
                <div class="tour-review-amount">
                  <p><span>8.9</span>244+ Reviews</p>
                  <h5>BDT <b>{{ $tour->lowest_price }}</b></h5>
                </div>
              </div>
              </div>
         </div>
         @endforeach
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
        <div class="swiper-button-next" style="color: #fff;"></div>
        <div class="swiper-button-prev" style="color: #fff;"></div>
      </div>



      {{-- @foreach($tours as $tour)
      <div class="col-md-3 holiday">
        <div class="home-tour-pakeg">
          <img src="{{asset($tour->package_image)}}" alt="" class="img-fluid">
          <div class="holiday-plan-place">
            <p><i class="bi bi-geo-alt-fill" style="color: #3c486b;"></i> {!! $tour->place->place_name !!}</p>
            <p><i class="bi bi-clock-fill" style="color: #3c486b;"></i> {{ Carbon\Carbon::createFromDate($tour->tour_start_date)->diffInDays($tour->tour_end_date) }} Days</p>
          </div>
          <div class="tours">
            <div class="tour-details">
              <a href="{{route('package-detail',$tour->id)}}"><h3>{{ $tour->tour_title }}</h3></a>

            </div>
            <div class="tour-review-amount">
              <p><span>8.9</span>244+ Reviews</p>
              <h5>BDT <b>{{ $tour->lowest_price }}</b></h5>
            </div>
          </div>
          </div>
      </div>
      @endforeach --}}

     <a href="{{route('website.package')}}" style="text-align: center;"><button type="button" class="btn btn-outline-warning" style="color: black;padding: 10px 15px;">View All Packages</button></a>

    </div>
  </div>
</section>


<section class="chose-destination holiday-plan" style=" padding-bottom: 20px;">
  <h4>Choose Your</h4>
  <h2>Destination</h2>

  <div class="container">
    <div class="row">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach($places as $tour)
          <div class="swiper-slide Destination">
            <a href="{{route('package-view', $tour->place_name)}}"><img src="{{asset($tour->place_image)}}" alt="" class="img-fluid" style="border-radius: 100%"></a>
         </div>
         @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next" style="color: #fff;"></div>
        <div class="swiper-button-prev" style="color: #fff;"></div>
      </div>
  </div>
</section>

<section class="perfect holiday-plan">
  <h4>Choose Your</h4>
  <h2>Perfect Holiday</h2>

  <div class="container">
    <div class="row">
      <div class="col-md-3 uniqu">
        <div class="perfect-img">
{{--          <a href="{{route('package-detail',$productsOne->id)}}"><img src="{{asset($productsOne->package_image)}}" alt="" class="img-fluid"></a>--}}
        </div>
      </div>
      @foreach($holidays as $holiday)
      <div class="col-md-3">
        <div class="perfect-img uniqu">
          <a href="{{route('package-detail',$holiday->id)}}"><img src="{{asset($holiday->package_image)}}" alt="" class="img-fluid"></a>
        </div>
      </div>
      @endforeach
      @foreach($productsTwo as $holiday)
      <div class="col-md-3 uniqu">
        <div class="perfect-img">
          <a href="{{route('package-detail',$holiday->id)}}"><img src="{{asset($holiday->package_image)}}" alt="" class="img-fluid"></a>
        </div>
      </div>
      @endforeach
      @foreach($productsThree as $holiday)
      <div class="col-md-3 uniqu">
        <div class="perfect-img">
          <a href="{{route('package-detail',$holiday->id)}}"><img src="{{asset($holiday->package_image)}}" alt="" class="img-fluid"></a>
        </div>
      </div>
      @endforeach
      @foreach($productsFour as $holiday)
      <div class="col-md-3">
        <div class="perfect-img uniqu">
          <a href="{{route('package-detail',$holiday->id)}}"><img src="{{asset($holiday->package_image)}}" alt="" class="img-fluid"></a>
        </div>
      </div>
      @endforeach
      <a href="{{route('website.package')}}" style="text-align: center;"><button type="button" class="btn btn-outline-warning" style="color: black;padding: 10px 15px;">View All Packages</button></a>
    </div>
  </div>
</section>

<section class="client-review">
  <div class="container">
    <div class="row">
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          @foreach($reviews as $review)
          <div class="swiper-slide">
           <div class="client-details">
            <img src="{{asset($review->client_image)}}" alt="" class="img-fluid">
           {{-- <p>"{{$review->client_description}}"</p>
           <h5>{{$review->client_name}}</h5> --}}
           </div>
         </div>
         @endforeach
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"  style="color: #ffc107;"></div>
        <div class="swiper-button-prev"  style="color: #ffc107;"></div>
      </div>
    </div>
  </div>
</section>

<section class="blog holiday-plan">
  <h4>The Unforgettable</h4>
  <h2>Travel Blogs</h2>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href="https://travel-blog.plusdevelopment.online/10-best-places-to-visit-in-singapore/"><img src="travel/image/blog/01.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-md-4">
      <a href="https://travel-blog.plusdevelopment.online/what-is-the-popular-places-of-malaysia/"><img src="travel/image/blog/02.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-md-4">
      <a href="https://travel-blog.plusdevelopment.online/what-is-the-best-area-to-stay-in-thailand/"><img src="travel/image/blog/03.jpg" alt="" class="img-fluid"></a>
    </div>
  </div>
</div>
</section>

<section class="contact">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14602.870033084559!2d90.4039904!3d23.7930718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a44b552583%3A0xb67591e45f3ea983!2sTravel%20Architect%20-%20Best%20Travel%20Agency%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1704977902112!5m2!1sen!2sbd" width="100%" height="400" style="border:0;border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="container">
    <div class="row contact-message">
            <!----- for massage validation-------->

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--------for message from controller--->
            @if(session()->has('message'))
            <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
            {{ session('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

      <h3>Contact Us</h3>
        <form action="{{route('contact-post')}}" method="post" class="row g-3 needs-validation" novalidate>
          @csrf
      <div class="col-md-12">
        <div class="mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message*" name="message" required></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name*" name="name" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com*" name="email" required>
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-outline-primary" style="width:100%;padding: 10px 0px;">SEND</button>
      </div>
        </form>
    </div>
  </div>
</section>


<section class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-details logo">
          <img src="travel/image/logo.png" alt="" class="img-fluid">
          <p>
            Soar to New Heights with Travel Architect! Unlock exclusive airfare deals and seamless booking. Experience the joy of travel made simple and affordable. Fly high with us!</p>
          <ul style="display: flex;
          display: inline-flex;">
            <li><a href="https://www.facebook.com/Travelarchitectbd/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/travel-architect/"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/travelarchitectbd/"><i class="bi bi-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-details company">
          <h3>Our Company</h3>
          <ul>
            <li><a href="">About us</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Terms & Conditions</a></li>
            <li><a href="">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-details company">
          <h3>Our Services</h3>
          <ul>
            <li><a href="">Air Ticketing</a></li>
            <li><a href="">Tour Package</a></li>
            <li><a href="">Visa Guide</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-details contact" style="overflow: hidden;">
          <h3>Contact Us</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14602.870033084559!2d90.4039904!3d23.7930718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a44b552583%3A0xb67591e45f3ea983!2sTravel%20Architect%20-%20Best%20Travel%20Agency%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1704977902112!5m2!1sen!2sbd" width="400" height="200" style="border:0;border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          {{-- <ul>
            <li><i class="bi bi-geo-alt-fill"></i>  Navana Cordelia, Road:17, House: 61 (Level: 3), Block: C, Banani 1213 Dhaka, Dhaka Division, Bangladesh</li>
            <li><i class="bi bi-telephone-fill"></i> 0145484894</li>
            <li><i class="bi bi-envelope-at-fill"></i> travelarchitectbd@gmail.com</li>
          </ul> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="footer-wizet">
    <p>Copyright © 2023 - Travel Architect. All rights reserved.</p>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- {{-- For a5uto search and dropdown --}} -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>

  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

////Dtae
    config={
    minDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    }
flatpickr("input[type=date-local]", config);

////Auto serch
    $('.select2').select2();


///////////////////////Plan The Perfect Holiday

    var swiper = new Swiper(".mySwiper2", {
      slidesPerView: 1,
      spaceBetween: 50,

      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

      centeredSlides: false,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });



////Special Offers
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 50,

      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },

      centeredSlides: false,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    ////home-popular
    var swiper = new Swiper(".mySwiper1", {
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: false,
      // breakpoints: {
      //   640: {
      //     slidesPerView: 4,
      //     spaceBetween: 20,
      //   },
      //   768: {
      //     slidesPerView: 4,
      //     spaceBetween: 20,
      //   },
      //   1024: {
      //     slidesPerView: 4,
      //     spaceBetween: 20,
      //   },
      // },
      // autoplay: {
      //   delay: 3500,
      //   disableOnInteraction: false,
      // },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });




//commet client
    var swiper1 = new Swiper(".mySwiper3", {
      effect: "cards",
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
  </body>
</html>
