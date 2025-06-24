@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Contact Us";
        $desc = "Whether you have questions, need assistance, or simply want to share.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))
    
    <!-- contact area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="rts__contact">
                        <span class="h4 d-block mb-30 text-center">Love to hear from you
                            Get in touch!</span>
                        <form id="contact-forms" method="POST" class="rts__contact__form">
                            <div class="form-input">
                                <label for="name">Your Name</label>
                                <div class="pr">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="email">Your Email</label>
                                <div class="pr">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                                    <i class="flaticon-envelope"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="msg">Your Message</label>
                                <div class="pr">
                                    <textarea id="msg" name="msg" placeholder="Message" required></textarea>
                                    <img src="{{asset('assets/images/icon/message.svg')}}" width="20" height="20" alt="">
                                </div>
                            </div>
                            <button type="submit" class="theme-btn btn-style fill w-100"><span>Send Message</span></button>
                        </form>
                        <div id="thankYouModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,.5); align-items:center; justify-content:center; z-index:9999;">
  <div style="background:#fff; padding:32px; border-radius:10px; text-align:center;">
    <h2>Thank you!</h2>
    <p>Your message has been sent.</p>
    <button onclick="document.getElementById('thankYouModal').style.display='none'">Close</button>
  </div>
</div>
                        <div id="form-messages" class="mt-20"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__image">
                        <img class="rounded-2 w-100 img-fluid" src="{{asset('assets/images/pages/contact.webp')}}" width="645" height="560" alt="contact__image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="contact__map">
                        <iframe class="w-100" height="560"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5682.03489077815!2d3.905383300000001!3d7.4316249999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039f2a922b36ef5%3A0xd113cc9eb478602d!2sBrava%20Hotel!5e1!3m2!1sen!2sng!4v1750230256787!5m2!1sen!2sng"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">

                        <div class="contact__info__item">
                            <h4>Hotel Info Center</h4>
                            <p>
                                Open Hours: Monday – Sunday <br>
                                Telephone: +2347047000608 <br>
                                Fax: +2347047000608 <br>
                                Email: bravahotelgroup@gmail.com
                            </p>
                        </div>
                        <div class="contact__info__item">
                            <h4>Hotel location</h4>
                            <p>
                                Address: 59 Samonda Avenue, Adjacent Aerodrome Estate Ibadan Oyo State <br>
                                Telephone: +2347047000608  <br>
                                Fax: +2347047000608  <br>
                                Email: bravahotelgroup@gmail.com
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contact area end -->
    @include('Frontend.Footer.footer__common')
    <script>
document.getElementById('contact-forms').addEventListener('submit', function(e){
  e.preventDefault();
  var form = e.target;
  var data = new FormData(form);
  fetch('https://formsubmit.co/ajax/tryvarse@gmail.com', { // use /ajax/ for FormSubmit
    method: 'POST',
    body: data,
    headers: { 'Accept': 'application/json' }
  })
  .then(response => {
    if (response.ok) {
      document.getElementById('thankYouModal').style.display = 'flex';
      form.reset();
    } else {
      alert('There was a problem submitting your form.');
    }
  })
  .catch(error => {
    alert('Network error!');
  });
});
</script>
@endsection
