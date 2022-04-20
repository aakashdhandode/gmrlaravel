@extends('layouts.app')
@section('content')

<div class="fixed-top">
    <div id="top-bar" class="hidden-sm-down">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="top-bar-welcome">
                        <ul>
                            <li>WELCOME TO GMR GROCERY</li>
                        </ul>
                    </div>
                    <div class="top-bar-info">
                        <ul>
                            <li><i class="fa fa-phone"></i>+91 77990 16664
                            </li>
                            <li><i class="fa fa-envelope"></i>Support@gmrgrocery.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <ul class="social-icons hidden-md-down">
                        <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header">
        <div class="container-fluid d-flex">
            <div class="logo mr-auto">
                <h1 class="text-light">
                    <a href="index.php">
                        <span>
                            <img src="{{asset('images/logo.png')}}" class="" alt="">

                        </span>
                    </a>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <nav class="nav-menu navbar-right d-none d-lg-block" style="float: right;">
                        <ul>
                            <li class="active"><a href="{{('/')}}">Home</a></li>
                            <li><a href="{{('/')}}">About Us</a></li>

                            <li><a href="{{('/')}}">Gallery</a></li>
                            <li><a href="{{('/')}}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2" style="text-align:right">
                    <a href="#" data-toggle="modal" data-target="#myModal" target="_blank">

                        <img src="{{asset('images/paly-stroy.jpg')}}" class="pay-store"></a>

                </div>
            </div>
        </div>

    </header>


</div>
<main id="main">
<section>

    <div class="container mt-5">
        <div class="row" style="display: block;">
            <h2 style="
    font-weight: 600;
    font-size: 24px;
">Privacy policy </h2>
            <p style="padding: 10px 0 0 0;font-size: 16px; line-height: 28px;">GMR Grocery completely reserves the right to edit, modify or delete the privacy policy independently
                    without any prior information. <br/>
                    During the progression of the website, we may include new technologies and
                    policies to improve our services.<br/>
                    We use your personal information to improve your search options on the website.
                    </p>
                
        </div>
</div>
</section>


</main>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact footer-links" data-aos-delay="100">
                    <h4 style="    font-size: 17px;
    margin: 0 0 18px 0;">GMR Grocery</h4>
                    <p>
                        Jeeman Circle, <br>
                        Near NR Function Hall<br>
                        Kadiri-515591 ,Andhra Pradesh<br><br>
                        <strong>Phone:</strong> +91 99593 43956 </a><br />

                        <strong>Email:</strong> Support@gmrgrocery.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links" data-aos-delay="200">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links" data-aos-delay="200">
                <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{('/privacy')}}">Privacy
                                policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{('/terms')}}" style=" font-size: 13px;">Terms
                                and conditions</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{('/refund')}}">Refund
                                policy</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-links" data-aos-delay="400">
                    <h4>Our Social Networks</h4>
                    <p>Please follow us on social media</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>GMR Grocery</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Design & Developed By <a href="https://odms.in">ODMS PVT LTD</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div class="follow-whatsapp">
    <a href="https://web.whatsapp.com/send?phone=+917799016664 &amp;text=Towards the creation of a home for your dream"
        title="Contact Us On WhatsApp" target="_blank"> <i class="fab fa-whatsapp"></i></a>
</div>




<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <!-- <p>This is a small modal.</p> -->
                    <img src="{{asset('images/comming.png')}}" alt="" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
