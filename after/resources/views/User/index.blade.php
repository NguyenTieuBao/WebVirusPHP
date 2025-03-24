
@extends('Layouts.UserNav');

@Section('content')
<!-- Start Home -->
<section id="home" class="home">

    <div class="home-content">
        <h3>Learn all Viruses</h3>
        <p>What diseases are encountered, where the epidemic began, accompanying symptoms</p>
        <a href="#virus" class="btn">Learn about viruses now</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="/img/img-1.jpg"></span>
        <span class="vid-btn" data-src="/img/img-2.jpg"></span>
        <span class="vid-btn" data-src="/img/img-3.jpg"></span>
    </div>

    <div class="video-container">
        <img src="/img/img-1.jpg" id="video-slider" loop autoplay muted>
    </div>

</section>
<!-- End Home -->

<!-- Start Virus -->
<section id="virus" class="virus">

    <h1 class="heading">
        <span>V</span>
        <span>I</span>
        <span>R</span>
        <span>U</span>
        <span>S</span>
        <span>E</span>
        <span>S</span>
    </h1>

    <div class="box-container">
    @foreach( $category as $item)

        <div class="box">

            <img src="/images/{{ $item->image }}" alt="">

            <div class="virus-content">
                <h3>{{$item->name}}</h3>
                <p>If you want more details, click on More Read</p>
            </div>

            

        </div>
    @endforeach    
    </div>
    <div class="btnx">
        <a class="btnMore" href="{{ route('virus') }}">Read More</a>

    </div>
    
</section>
<!-- End Virus -->

<!-- Start About Us -->

<section class="about" id="about">

    <h1 class="heading">
        <span>A</span>
        <span>B</span>
        <span>O</span>
        <span>U</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
    </h1>

    <div class="text-box">
        <span class="text-about">
            Vertex Systems was founded in May 2004 with the aim of providing quality software solutions related to entire spectrum of HR related application i.e. Time and Attendance Management, Payroll, HR, Visitor Management and any other customized software solutions. The solutions are designed to suit the needs of all types and size of companies.
        </span>
        <br>
        <span class="text-about">
            In the last three year Vertex has witnessed many business processes, solutions and technology cycles and has demonstrated its ability in embracing these changes into its business model.
        </span>
        <br>
        <span class="text-about">
            Vertex System has tie-ups with reputed system integrators in the field of Time Attendance and Access Control System for providing Time Management and Payroll software. In the last three years Vertex has become the preferred supplier of Time Attendance Software to the most of the leading systems integrators in this field. The continuous faith of our partners in us stands testimony of our capabilities and support provided to them and their customers.
        </span>
        <br>
        <span class="text-about">
            We, at Vertex, believe in relationship building and to provide value added services to our partners and their clients.
        </span>
    </div>

    <div class="about-text-logo">
        <div class="text-logo">
            <h1>
                We <br> <span class="h1-1">build</span> <br> <span class="h1-2">strong</span> <br> <span>brands</span>
            </h1>
        </div>
        
        <div class="text-logo">
            <h2>Our Mission</h2>
            <span class="text-our">Providing innovative, cost effective solutions with best of skills Application of the latest and advanced technologies in any product we develop or modify based on the client requirements. Customer service at its best.</span>    
        </div>
        
        <div class="text-logo">
            <h3>Our Vision</h3>
            <span class="text-our">Fulfilling clients' requirements to have long term relationships Our priority is the interest of our clients. We have always thrived and taken effort to maintain long term client relationship. Our services are reliable and genuine.</span>
        
        </div>

    </div>

    
    

</section>

<!-- End About Us -->


<!-- End Contact Us -->

<!-- Start Footer -->
@endsection