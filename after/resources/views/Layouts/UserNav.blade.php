<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="\template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="\template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="\User123\style.css">
    <link rel="stylesheet" href="\User123\contact.css">
</head>
<body>
<!-- Start Header Navbar -->
<header>

    <a href="{{ route('user') }}" class="logo"><img  src="\img\vertex-Logos_white.png" alt=""></a>

    <nav class="navbar">
        <a href="{{ route('user') }}">Home</a>
        <a href="{{ route('virus') }}">Viruses</a>
        <a href="{{ route('contact.create') }}">Contact Us</a>
    </nav>

    <div class="icons">
        <i class="bx bx-menu" id="menu-bar"></i>
        <i class="bx bxs-virus" id="search-btn"></i>
    </div>

    
</header>

<!-- Content  -->
@yield('content');
<!-- End Content -->


<section class="footer">

    <div class="footer-container">
        <div class="footer-logo-container">
            <a href="{{ route('user') }}" class="logo"><img  src="\img\vertex-Logos_white.png" alt=""></a>
    
            <div class="logo-box">
                <div class="icon facebook">
                    <i class='bx bxl-facebook-circle'></i>   
                    <span class="tooltip">Facebook</span>         
                </div>
    
                <div class="icon twitter">
                    <i class='bx bxl-twitter' ></i> 
                    <span class="tooltip">Twitter</span>         
                </div>
    
                <div class="icon instagram">
                    <i class='bx bxl-instagram-alt' ></i>  
                    <span class="tooltip">Instagram</span>         
                </div>
    
                <div class="icon youtube">
                    <i class='bx bxl-youtube' ></i>  
                    <span class="tooltip">Youtube</span>         
                </div>
            </div>
        </div>
    
        <div class="footer-text-container">
            <h1>Vertex Systems</h1>
            <p>Delivering superior information management solutions that help unlock the potential of IDD Organizations.</p>
        </div>
    
        <div class="footer-contact-container">
            <h1>Contact</h1>
            <p>425 Soledad St Suite 500 
                <br>
                San Antonio, TX 78205
            </p>
            <p>
                Privacy Policy
                <br>
                Terms and Conditions
            </p>
        </div>
    </div>

    

    <div class="footer-copy">
        <p>Copyright All Rights Reserved © 2023 Vertex Systems</p>
    </div>
</section>

<!-- End Footer -->




<script src="\User123\app.js"></script>

<script src="\template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="\template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="\template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="\template/dist/js/demo.js"></script>
</body>
</html>