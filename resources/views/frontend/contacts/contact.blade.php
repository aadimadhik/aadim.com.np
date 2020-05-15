<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>contact@example.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
      </div>

      <form action="/contact" method="POST">
        @csrf
        <div class="form-row">
            <input type="text" name="name" placeholder="Name" />
            <p style="color:red;">{{ $errors->first('title') }}</p>

            <input type="email" name="email" placeholder="Email" />

        </div>
        <input type="text" name="subject" placeholder="Subject" />

        <textarea name="Message" id="" cols="30" rows="10" placeholder="Message"></textarea>

        <button type="submit">Send Message</button>
    </form>


    </div>
  </section><!-- End Contact Section -->




{{-- <form action="/contact" method="POST" class="php-email-form mt-4">
    @csrf

    <div class="form-row">
      <div class="col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
      </div>
      <div class="col-md-6 form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
    </div>
    <div class="mb-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your message has been sent. Thank you!</div>
    </div>
    <div class="text-center"><button type="submit">Send Message</button></div>
  </form>
 --}}
