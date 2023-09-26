@extends('components.navbar')

@section('content')
    <!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
      <img src="/images/hero-3.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Morocco</h3>
        <p><b>We had the best time playing at Venice Beach!</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="/images/hero-1.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Namibia</h3>
        <p><b>The atmosphere in Namibia is lorem ipsum.</b></p>    
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="/images/hero-2.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Nigeria</h3>
        <p><b>Thank you, Nigeria - A night we won't forget.</b></p>    
      </div>
    </div>
  
    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">ABOUT US</h2>
      <p class="w3-opacity"><i>We love to help</i></p>
      <p class="w3-justify">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      {{-- <div class="w3-row w3-padding-32">
        <div class="w3-third">
          <p>Name</p>
          <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        </div>
        <div class="w3-third">
          <p>Name</p>
          <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        </div>
        <div class="w3-third">
          <p>Name</p>
          <img src="/w3images/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
        </div>
      </div> --}}
    </div>
  
    <!-- The Tour Section -->
    <div class="w3-black" id="tour">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">MENBERS OF STAFF</h2>
        <p class="w3-opacity w3-center"><i>meet our staff</i></p><br>
{{--   
        <ul class="w3-ul w3-border w3-white w3-text-grey">
          <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
          <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
          <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
        </ul> --}}
  
        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
            @foreach ($staff as $singleStaff )
                <div class="w3-third w3-margin-bottom">
                    <img src="{{ $singleStaff['image'] }}" alt="New York" style="width:100%; height:250px" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                      <p><b>{{ $singleStaff['name'] }}</b></p>
                      <p class="w3-opacity">{{ $singleStaff['position'] }}</p>
                      <p>{{ $singleStaff['desc'] }}</p>
                      <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">More Info</button>
                    </div>
                </div>

          @endforeach
          </div>
        </div>
      </div>
    </div>
  
    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32"> 
          <span onclick="document.getElementById('ticketModal').style.display='none'" 
         class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
        </header>
        <div class="w3-container">
          <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
          <input class="w3-input w3-border" type="text" placeholder="How many?">
          <p><label><i class="fa fa-user"></i> Send To</label></p>
          <input class="w3-input w3-border" type="text" placeholder="Enter email">
          <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
      </div>
    </div>
  
    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
      <h2 class="w3-wide w3-center">CONTACT</h2>
      <p class="w3-opacity w3-center"><i>Want to volunteer? Drop a note!</i></p>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <i class="fa fa-map-marker" style="width:30px"></i> London, UK<br>
          <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        </div>
        <div class="w3-col m6">
          <form action="/contact" method="POST">
            @csrf
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
          </form>
        </div>
      </div>
    </div>
    {{-- map --}}
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.8368405573324!2d-0.32461207370749506!3d51.07456189223171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875ebca821fdf6f%3A0xf4bd8c5e0f64bc52!2sHorsham%20RH12%205FA!5e0!3m2!1sen!2suk!4v1695542476073!5m2!1sen!2suk" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!-- End Page Content -->
  </div>

@endsection