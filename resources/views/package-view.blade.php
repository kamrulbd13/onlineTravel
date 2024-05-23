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
   
   
  {{-- <section class="search-result" style="margin-top: 25px;">
    <div class="container">
      <form action="{{ route('website.package.search') }}" method="GET">
        @csrf
        <div class="row search-result-back" >
            <div class="col-md-1"></div>
            <div class="col-md-8">
              <div class="inputi-form" style="z-index: 1000;">
                <label>Location/Area <i class="bi bi-geo-alt-fill"></i></label>
                <select class="form-control select2" name="title" placeholder="text" aria-placeholder="text" required>
                <option value="{!!$place_name!!}">{!!$place_name!!}</option> 
                 @foreach($places as $place_name)
                <option  value="{{$place_name->place_name}}">{{$place_name->place_name}}</option> 
                @endforeach
                @foreach($tour_pakegs as $pakeg_title)
                <option  value="{{$pakeg_title->tour_title}}">{{$pakeg_title->tour_title}}</option> 
                @endforeach
                </select>
             </div>
            </div>
            <div class="col-md-2">
              <div class="sarch-btn">
                <button type="submit" class="btn btn-warning">Search</button>
            </div>
            </div>
            <div class="col-md-1"></div>
        </div>
      </form>
    </div>
</section> --}}
   
<section class="pakeg-view-img">
  <h2>{!!$place_name!!} Tour Packages</h2>
</section>
    
<section class="all-project" style="margin-top: 25px;">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <form action="{{ route('website.package.search') }}" method="GET" >
          @csrf
        <div class="project-details-search">
          <p>Search for a Tour</p>
          <div class="d-flex" role="search">
            <input class="form-control" type="search" name="title" placeholder="{!!$place_name!!}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </div>
        <div class="btn-rest">
          <button type="button" class="btn btn-warning">Reset</button>
        </div>
        <div class="input-price">
            <label for="range2">Your Budget (In BDT)</label>
            <input id="range2" name="lowestPrice" type="range" min="0" max="10000" value="150" onmousemove="inputRange2.value=value">
            <output id="inputRange2"></output>

             <label for="range1">Duration in Days</label>
            <input id="range1" name="duration" type="range" min="0" max="30" value="5" onmousemove="inputRange1.value=value">
            <output id="inputRange1"></output>

        </div>
     
        <div class="hotel-rating">
          <p>User Rating</p>
          <div class="form-check">
            <input class="form-check-input" name="ratings[]" type="checkbox" value="5" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              <i class="bi bi-star-fill" style="color: #f9d949;"></i> 4.5 & above (Excellent)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="ratings[]" type="checkbox" value="4" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
              <i class="bi bi-star-fill" style="color: #f9d949;"></i> 4 & above (Very Good)
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="ratings[]" type="checkbox" value="3" id="flexCheckChecked2">
            <label class="form-check-label" for="flexCheckChecked2">
              <i class="bi bi-star-fill" style="color: #f9d949;"></i> 3 & above (Good)
            </label>
          </div>
          
        </div>
      </form>

      </div>
      <div class="col-md-9">

      @foreach($tour_pakeg as $tour)
      <div class="all-pakeg">
        <!-- <p>Showing 05 of 14 packages</p> -->
      <div class="row">
        <div class="col-md-5 package-image" style="overflow: hidden;">
         <a href="{{route('package-detail',$tour->id)}}"> <img src="{{asset($tour->package_image)}}" alt="" class="img-fluid"></a>
        </div>
        <div class="col-md-5">
          <div class="single-pakg-info">
            <a href="{{route('package-detail',$tour->id)}}" style="font-family: 'Poppins';margin-top: 10px;color: #3c486b;"><h3>{{ $tour->tour_title }}</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci eaque fugiat non doloremque, blanditiis voluptatum!</p>

         <div class="star">
          <h4><span>BDT</span> {{ $tour->lowest_price }}</h4>
             <i class="bi bi-star-fill" style="color: #f9d949;"></i><i class="bi bi-star-fill" style="color: #f9d949;"></i><i class="bi bi-star-fill" style="color: #f9d949;"></i><i class="bi bi-star-fill" style="color: #f9d949;"></i><i class="bi bi-star-fill" style="color: #f9d949;"></i>
         </div>

         <div class="package-bio">
          <ul>
            <li><a href="{{route('package-detail',$tour->id)}}"><i class="bi bi-calendar"></i> <br>{{ Carbon\Carbon::createFromDate($tour->tour_start_date)->diffInDays($tour->tour_end_date) }}</a></li>
            <li><a href="{{route('package-detail',$tour->id)}}"><i class="bi bi-geo-alt-fill"></i> <br> {{$tour->place->place_name}}</a></li>
          </ul>
         </div>
            
          </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
       @endforeach


                <div class="pagination">
                  <div class="text-end d-flex ">
                      {{-- Previous Page Link --}}
                      @if ($tours->onFirstPage())
                          <li class="disabled btn btn-warning mb-3 mr-1 me-3" aria-disabled="true" aria-label="@lang('pagination.previous')">
                              <span aria-hidden="true"><i class="bi bi-arrow-left-circle"></i></span>
                          </li>
                      @else
                          <li>
                              <a href="{{ $tours->previousPageUrl() }}" rel="prev"  class="btn btn-warning mb-3 mr-1 me-3" aria-label="@lang('pagination.previous')"><i class="bi bi-arrow-left-circle"></i></a>
                          </li>
                      @endif
              
                  
                      {{-- Next Page Link --}}
                      @if ($tours->hasMorePages())
                          <li class=" text-decoration-none ">
                              <a class="btn btn-warning mb-3 " href="{{ $tours->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="bi bi-arrow-right-circle"></i></a>
                          </li>
                      @else
                          <li class="disabled btn btn-warning mb-3 " aria-disabled="true" aria-label="@lang('pagination.next')">
                              <span aria-hidden="true"> <i class="bi bi-arrow-right-circle"></i></span>
                          </li>
                      @endif
                </div>
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
  window.addEventListener("DOMContentLoaded",() => {
  let range1 = new RollCounterRange("#range1"),
    range2 = new RollCounterRange("#range2");
});

class RollCounterRange {
  constructor(id) {
    this.el = document.querySelector(id);
    this.srValue = null;
    this.fill = null;
    this.digitCols = null;
    this.lastDigits = "";
    this.rollDuration = 0; // the transition duration from CSS will override this
    this.trans09 = false;

    if (this.el) {
      this.buildSlider();
      this.el.addEventListener("input",this.changeValue.bind(this));
    }
  }
  buildSlider() {
    // create a div to contain the <input>
    let rangeWrap = document.createElement("div");
    rangeWrap.className = "range";
    this.el.parentElement.insertBefore(rangeWrap,this.el);

    // create another div to contain the <input> and fill
    let rangeInput = document.createElement("span");
    rangeInput.className = "range__input";
    rangeWrap.appendChild(rangeInput);

    // range fill, place the <input> and fill inside container <span>
    let rangeFill = document.createElement("span");
    rangeFill.className = "range__input-fill";
    rangeInput.appendChild(this.el);
    rangeInput.appendChild(rangeFill);

    // create the counter
    let counter = document.createElement("span");
    counter.className = "range__counter";
    rangeWrap.appendChild(counter);

    // screen reader value
    let srValue = document.createElement("span");
    srValue.className = "range__counter-sr";
    srValue.textContent = "0";
    counter.appendChild(srValue);

    // column for each digit
    for (let D of this.el.max.split("")) {
      let digitCol = document.createElement("span");
      digitCol.className = "range__counter-column";
      digitCol.setAttribute("aria-hidden","true");
      counter.appendChild(digitCol);

      // digits (blank, 0–9, fake 0)
      for (let d = 0; d <= 11; ++d) {
        let digit = document.createElement("span");
        digit.className = "range__counter-digit";

        if (d > 0)
          digit.textContent = d == 11 ? 0 : `${d - 1}`;

        digitCol.appendChild(digit);
      }
    }

    this.srValue = srValue;
    this.fill = rangeFill;
    this.digitCols = counter.querySelectorAll(".range__counter-column");
    this.lastDigits = this.el.value;

    while (this.lastDigits.length < this.digitCols.length)
      this.lastDigits = " " + this.lastDigits;

    this.changeValue();

    // use the transition duration from CSS
    let colCS = window.getComputedStyle(this.digitCols[0]),
      transDur = colCS.getPropertyValue("transition-duration"),
      msLabelPos = transDur.indexOf("ms"),
      sLabelPos = transDur.indexOf("s");

    if (msLabelPos > -1)
      this.rollDuration = transDur.substr(0,msLabelPos);
    else if (sLabelPos > -1)
      this.rollDuration = transDur.substr(0,sLabelPos) * 1e3;
  }
  changeValue() {
    // keep the value within range
    if (+this.el.value > this.el.max)
      this.el.value = this.el.max;

    else if (+this.el.value < this.el.min)
      this.el.value = this.el.min;

    // update the screen reader value
    if (this.srValue)
      this.srValue.textContent = this.el.value;

    // width of fill
    if (this.fill) {
      let pct = this.el.value / this.el.max,
        fillWidth = pct * 100,
        thumbEm = 1 - pct;

      this.fill.style.width = `calc(${fillWidth}% + ${thumbEm}em)`;
    }
    
    if (this.digitCols) {
      let rangeVal = this.el.value;

      // add blanks at the start if needed
      while (rangeVal.length < this.digitCols.length)
        rangeVal = " " + rangeVal;

      // get the differences between current and last digits
      let diffsFromLast = [];
      if (this.lastDigits) {
        rangeVal.split("").forEach((r,i) => {
          let diff = +r - this.lastDigits[i];
          diffsFromLast.push(diff);
        });
      }

      // roll the digits
      this.trans09 = false;
      rangeVal.split("").forEach((e,i) => {
        let digitH = 1.5,
          over9 = false,
          under0 = false,
          transY = e === " " ? 0 : (-digitH * (+e + 1)),
          col = this.digitCols[i];

        // start handling the 9-to-0 or 0-to-9 transition
        if (e == 0 && diffsFromLast[i] == -9) {
          transY = -digitH * 11;
          over9 = true;

        } else if (e == 9 && diffsFromLast[i] == 9) {
          transY = 0;
          under0 = true;
        }

        col.style.transform = `translateY(${transY}em)`;
        col.firstChild.textContent = "";

        // finish the transition
        if (over9 || under0) {
          this.trans09 = true;
          // add a temporary 9
          if (under0)
            col.firstChild.textContent = e;

          setTimeout(() => {
            if (this.trans09) {
              let pauseClass = "range__counter-column--pause",
                transYAgain = -digitH * (over9 ? 1 : 10);

              col.classList.add(pauseClass);
              col.style.transform = `translateY(${transYAgain}em)`;
              void col.offsetHeight;
              col.classList.remove(pauseClass);

              // remove the 9
              if (under0)
                col.firstChild.textContent = "";
            }

          },this.rollDuration);
        }
      });
      this.lastDigits = rangeVal;
    }
  }
}


// for checked box
$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});

</script>

  </body>
</html>

@push('extra_script')

@endpush