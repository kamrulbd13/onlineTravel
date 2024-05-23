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

    <link rel="stylesheet" href="{{asset('travel/css/style.css')}}">
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
          <img src="{{asset('travel/image/logo.png')}}" alt="Logo-img" class="img-fluid">
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

    <div class="single-hotel-galley">
        <div class="container">

        <div class="row">
        <div class="col-md-6 main">
            <img src="{{asset($package->package_image)}}" class="img-fluid">
        </div>

        <div class="col-md-6 main last">
            <div class="row">
              @foreach($images as $otherImage)
                <div class="col-md-6 child"> <img src="{{asset($otherImage->image)}}" class="img-fluid"></div>
                @endforeach
            </div>

       </div>
        </div>

        </div>
    </div>
    <div class="singl-hotel-details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>{{$package->tour_title}}</h3>
                    <p><i class="bi bi-geo-alt-fill"></i> {{$package->tour_address}}</p>
                    <div class="hotel-star">
                        <i class="bi bi-star-fill"  style="color: #f9d949;"></i>
                        <i class="bi bi-star-fill"  style="color: #f9d949;"></i>
                        <i class="bi bi-star-fill"  style="color: #f9d949;"></i>
                        <i class="bi bi-star"  style="color: #f9d949;"></i>
                        <i class="bi bi-star"  style="color: #f9d949;"></i><span>3 Stars</span>
                    </div>
                </div>
{{-----------------------------}}
                <div class="col-md-4">
{{--                    package category--}}
                    @foreach($packageCategories as $packageCategory)
                        <div class="Standard shadow-sm mb-4 border  rounded">
                            <form action="">
{{--                            <form action="{{route('book-now', ['id' => $packageCategory->id])}}" method="post">--}}
                             
                                <input type="text" hidden value="{{$packageCategory->id}}" name="package_id">
                                <div class="container bg-white border  rounded">
                                    <h2 class="p-2 text-muted">{{$packageCategory->package_category_name ?? ''}}</h2>
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <div class="d-flex justify-content-around p-0">
                                                <div class="p-0 text-center" style="line-height: 25px;">
                                                    <strong class="text-muted">Valid From</strong>
                                                    <h6 class="fw-bold text-muted">{{$package->tour_start_date ?? ''}}</h6>
                                                </div>
                                                <div class=" p-0 text-center" style="line-height: 25px;">
                                                    <strong class="text-muted">Valid Till</strong>
                                                    <h6 class="fw-bold text-muted">
                                                        {{$package->tour_end_date ?? ''}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">

                                            <div class="d-flex justify-content-between mt-1 ms-3 me-3">
                                                <div class="">
                                                    <p style="line-height: 15px;" class="text-muted mb-1">
                                                        Price Per Person <br>
                                                        <small>(Double)</small>
                                                    </p>
                                                    <strong class="text-muted">
                                                        BDT {{$package->tour_price ?? ''}}
                                                    </strong>
                                                </div>
                                                <div class="">
                                                    <p style="line-height: 15px;" class="text-muted mb-1" >
                                                        Price Per Person <br>
                                                        <small>(Twin)</small>
                                                    </p>
                                                    <strong class="text-muted">
                                                        BDT {{$package->packagePrice ?? ''}}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-1 ms-3 me-3 mt-2">
                                                <div class="">
                                                    <p style="line-height: 15px;" class="text-muted mb-1">
                                                        Price Per Person <br>
                                                        <small>(Child with bed)</small>
                                                    </p>
                                                    <strong class="text-muted">
                                                        BDT {{$package->packagePrice ?? ''}}
                                                    </strong>
                                                </div>
                                                <div class="">
                                                    <p style="line-height: 15px;" class="text-muted mb-1">
                                                        Price Per Person <br>
                                                        <small>(Child without bed)</small>
                                                    </p>
                                                    <strong class="text-muted">
                                                        BDT {{$package->packagePrice ?? ''}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="p-3">
                                                <p style="line-height: 18px;" class="text-muted">
                                                    <strong>
                                                        <i class="bi bi-building"></i>
                                                        Hotel: lbis Budget pearl or similar
                                                    </strong>
                                                    <br>
                                                    <small class="ms-3">* Price includes VAT and Tax</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button to Open the Modal -->
                                    <hr class=" mx-auto bg-secondary w-75 mb-4">
                                    <div class="text-center">
{{--                                        <button type="submit" class="btn btn-warning mb-3 w-75 mx-auto fw-bold" >--}}
                                            <button type="" class="btn btn-warning mb-3 w-75 mx-auto fw-bold" data-bs-toggle="modal" data-bs-target="#reserveModal">
                                            SELECT OFFER
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>

                    @endforeach
{{------------./-----------------}}
{{--------------model                    --}}
                    <div class="modal fade" id="reserveModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Booking Form</h4>
                                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body " >
                                    <form id="contForm" action="" method="POST"  enctype="multipart/form-data">
                                        @csrf
                                        <span class="mb-2" ><b class="text-danger">*</b> Please fill all the information carefully</span>
                                        <div class="mb-3 mt-2">
                                            <label for="fullName" class="form-label fw-bold" > Full Name</label>
                                            <input type="text" class="form-control"  name="fullName" placeholder="John Doe" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email" class="form-label fw-bold" >Email</label>
                                            <input type="email" class="form-control"  name="email" placeholder="JohnDoe@gmail.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label fw-bold" >Phone</label>
                                            <input type="number" class="form-control" name="phone" placeholder="01xxxxxxxxxx" required>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="travel_date" class="form-label fw-bold">Number of Person</label>
                                            <div class="col col-md-6">
                                            <div class="from-group row">
                                                    <label for="phone" class="col-sm-2 col-form-label me-2" >Adult</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-secondary" onclick="decreaseValueAdult()" value="Decrease Value" type="button" id="button-addon1" >-</button>
                                                        <input type="text" id="number1" name="adultNumber"  class="form-control text-center" min="1" value="1" aria-label="text with button addon" aria-describedby="button-addon1">
                                                        <button class="btn btn-secondary" onclick="increaseValueAdult()" value="Increase Value" type="button" id="button-addon2">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="from-group row float-end">
                                                    <label for="phone" class="col-sm-2 col-form-label me-2" >Child</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb-3">
                                                            <button class="btn btn-secondary" onclick="decreaseValueChild()" value="Decrease Value" type="button" id="button-addon1" >-</button>
                                                            <input type="text" id="number2" name="childNumber"  class="form-control text-center"  min="0" value="0" aria-label=" text with button addon" aria-describedby="button-addon2">
                                                            <button class="btn btn-secondary" onclick="increaseValueChild()" value="Increase Value" type="button" id="button-addon2">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="travel_date" class="form-label fw-bold">Select Your Travel Date</label>
                                            <input type="date" class="form-control" id="travel_date" name="travel_date" required>
                                        </div>
                                         <div class="mb-3">
                                            <label for="departure_time" class="form-label fw-bold">Travel Duration</label>
                                             <div class="input-group mb-3">
                                                 <button class="btn btn-secondary" onclick="decreaseValueTravelDuration()" value="Decrease Value" type="button" id="button-addon1" >-</button>
                                                 <input type="text" id="number3" name="travelDuration"  class="form-control text-center"  min="1" value="1" aria-label=" text with button addon" aria-describedby="button-addon2">
                                                 <button class="btn btn-secondary" onclick="increaseValueTravelDuration()" value="Increase Value" type="button" id="button-addon2">+</button>
                                             </div>
                                        </div>
                                        <div class="row mb-3 ms-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="condition1" value="" id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Air Ticket Required Tick Box
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="condition2" id="flexCheckChecked" required>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Tourist Visa Required Tick Box
                                                </label>
                                            </div>
                                        </div>
                                           <div class="mb-3">
                                            <label for="special_notes" class="form-label fw-bold">Additional Notes <span class="text-muted">(if any)</span></label>
                                            <textarea class="form-control" id="special_notes" name="special_notes"></textarea>
                                        </div>
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-warning mb-3 w-50 mx-auto fw-bold">
                                                    GET OFFER
                                                </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
{{--------------./model                    --}}
            </div>
{{--            ./row --}}
        </div>
    </div>
    <div class="single-hotel-text">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Package Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Itinerary Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Hotels Overview</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab1" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1" aria-selected="true">Special Notes</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">{!! $package->overview !!}</div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">{!! $package->meeting_pickup !!}</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">{!! $package->included_excluded !!}</div>

                        <div class="tab-pane fade" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1" tabindex="0">{!! $package->expectations !!}</div>

                      </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-pakeg">
      <div class="container-fluid comon-header">
        <h2>Best Tour Packages</h2>
        <img src="travel/image/Vector.png" alt="" class="img-fluid">
        <div class="row home-pakeg-all">
            @foreach($tours as $tour)
          <div class="col-md-3">
            <div class="home-tour-pakeg">
              <img src="{{asset($tour->package_image)}}" alt="" class="img-fluid">
              <div class="tours">
                <div class="tour-details">
                  <a href="{{route('package-detail',$tour->id)}}"><h3>{{ $tour->tour_title }}</h3></a>
                <p><i class="bi bi-geo-alt-fill" style="color: #3c486b;"></i> {!! $tour->place->place_name !!}</p>
                <p><i class="bi bi-clock-fill" style="color: #3c486b;"></i> {{ Carbon\Carbon::createFromDate($tour->tour_start_date)->diffInDays($tour->tour_end_date) }} Days</p>
                </div>
                <div class="tour-review-amount">
                  <p><span>8.9</span>244+ Reviews</p>
                  <h5>BDT <b>{{ $tour->lowest_price }}</b></h5>
                </div>
                <a href="{{route('package-detail',$tour->id)}}"><button type="button" class="btn btn-outline-warning" style="color: #3c486b;">Book Now</button></a>
              </div>
              </div>
          </div>
          @endforeach
        <a href="{{route('website.package')}}"><button type="button" class="btn btn-outline-warning" style="color: #3c486b;display: block;margin-left: auto;margin-right: auto;margin-bottom: 60px;">View All Packages</button></a>
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

{{--model script --}}
        <script>
        {{--                   adult--}}
            function increaseValueAdult() {
                var value = parseInt(document.getElementById('number1').value, 10);
                value = isNaN(value) ? 1 : value;
                value++;
                document.getElementById('number1').value = value;
            }

            function decreaseValueAdult() {
                var value = parseInt(document.getElementById('number1').value, 10);
                value = isNaN(value) ? 1 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('number1').value = value;
            }
        {{--                    child--}}
            function increaseValueChild() {
                var value = parseInt(document.getElementById('number2').value, 10);
                value = isNaN(value) ? 0 : value;
                value++;
                document.getElementById('number2').value = value;
            }

            function decreaseValueChild() {
                var value = parseInt(document.getElementById('number2').value, 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('number2').value = value;
            }

        {{--                    travel duration--}}

            function increaseValueTravelDuration() {
                var value = parseInt(document.getElementById('number3').value, 10);
                value = isNaN(value) ? 0 : value;
                value++;
                document.getElementById('number3').value = value;
            }

            function decreaseValueTravelDuration() {
                var value = parseInt(document.getElementById('number3').value, 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? value = 1 : '';
                value--;
                document.getElementById('number3').value = value;
            }
        </script>
{{--model script --}}
  </body>
</html>
