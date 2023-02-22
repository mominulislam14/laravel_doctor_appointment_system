<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($doctor as $doctors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">

              <img style="height: 300px !important" src="doctorimage/{{ $doctors -> image }}" alt="">

              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>

            </div>

            <div class="body">
              <p class="text-xl mb-0">{{ $doctors->name }}</p>
              <span class="text-sm text-grey">{{ $doctors -> speciality }}</span>
            </div>
            
          </div>
        </div>

        @endforeach

        {{-- <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_2.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Alexa Melvin</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div> --}}
        
      </div>
    </div>
  </div>