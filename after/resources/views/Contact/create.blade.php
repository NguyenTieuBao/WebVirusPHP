@extends('Layouts.UserNav');
@section('content')


<!-- Start Contact Us -->
<div class="container">
  <div style="text-align:center">
    <h2 class="text-h2">Contact Us</h2>
  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12609.732281738927!2d-122.47286700000001!3d37.803324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey%20Ave%2C%20San%20Francisco%2C%20CA%2094129!5e0!3m2!1svi!2sus!4v1686140221319!5m2!1svi!2sus" 
      width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="row">
    <div class="column">
      <img src="\img\about-us.jpg" style="width:100%" height="50%" class="row-img">
    </div>
    <div class="column" id="contact-now">
      <form action="{{ url('contact') }}" method="POST">
        @csrf
        <label for="fname">Your Name (required)</label>
        <input type="text" id="fname" name="name" placeholder="Your name...">
        <label for="lname">Your Email (required)</label>
        <input type="text" id="lname" name="email" placeholder="Your email...">
        <label for="lname">Your Phone Number</label>
        <input type="text" id="lname" name="phone" placeholder="Your Phone Number...">
        <label for="subject">Your Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <button class="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- End Contact Us -->


@endSection