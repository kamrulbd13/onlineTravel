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
<section class="visa-guide-header">
  <div class="container">
    <div class="row">
      <div class="col-md-7"></div>
      <div class="col-md-5">
        <h1>Visa Guide</h1>
      <p>We provide outstanding travel visa processing facilities. Save yourself the hassle of running to and from travel agencies and get your processing done in a breeze with us.</p>
      </div>
    </div>
  </div>
</section>

<section class="visa-search">
  <div class="container">
     <form action="{{route('search-visa')}}" method="POST">
        @csrf
     <div class="row map">
      <div class="col-md-1">
        <i class="bi bi-globe-central-south-asia"></i>
      </div>
      <div class="col-md-5">
       <h3>Please select a country</h3>
      </div>
      <div class="col-md-5" style="margin-top: 10px;">
            <select class="form-control select2" name="country" required>
            <option value="">{!! $visa->country_name !!}</option>
            @foreach($countrys as $country)
            <option  value="{!! $country->country_name !!}">{!! $country->country_name !!}</option>
            @endforeach
            </select>
      </div>
      
     <div class="col-md-1">
          <button type="submit" class="btn btn-warning" style="color: #3c486b;padding: 12px 25px;
    margin-top: 10px;">Go</button>
      </div>
    </div>
    </form>
  </div>
</section>

<section class="country-details" style="margin-top:50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>{!! $visa->country_details !!}</p>
      </div>
      <div class="col-md-4">
        <img src="{{asset('uplods/visa/'.$visa->country_image)}}" alt="map" class="img-fluid">
      </div>
      <div class="col-md-12">
        <div class="country-details-bottom">
          {!! $visa->visa_details !!}
        </div>
      </div>
    </div>
  </div>
</section>
<section class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-details logo">
          <img src="{{asset('travel/image/logo.png')}}" alt="" class="img-fluid">
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
  ////Auto serch
    $('.select2').select2();
</script>
  </body>
</html>