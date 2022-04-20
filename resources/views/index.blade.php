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
                            <li class="active"><a href="#index">Home</a></li>
                            <li><a href="#about">About Us</a></li>

                            <li><a href="#portfolio">Gallery</a></li>
                            <!-- <li><a href="#team">Team</a></li> -->
                            <li><a href="#contact">Contact Us</a></li>
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="margin-top: 122px;">

    <div class="container" id="index">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 benner-title top-margin">
                <h3>Get Home Delivery at your doorstep - Your Safety is Our Top Priority</h3>

                <p>The best online grocery store is here. Buy all types of supermarket groceries from GMR grocery stores
                    including fresh and green vegetables, daily home essentials, food supplies and many more.</p>
                <p>Download our mobile android app for easy access to the home delivery services.</p>
                <a href="#" data-toggle="modal" data-target="#myModal" class="btn-get-started scrollto">Download App</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset('images/123.png')}}" class="img-fluid animated" alt="">
                <!-- <img   src="{{asset('images/123.png')}}" 
                class="pay-store"> -->
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                    <!-- <img src="assets/img/benner.png" class="img-fluid" alt="" > -->
                    <img src="{{asset('images/benner.png')}}" class="img-fluid animated" alt="">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0 mt-3" style="text-align: justify;">
                    <h3 class="mt-5">About Us</h3>
                    <h4>GMR grocery is one of the leading online supermarket grocery stores in India. </h4>
                    <p data-aos-delay="100" class="mt-4 p-0">
                        Shop a wide range of 20,000+ products including home and household essentials, fresh fruits and
                        vegetables, pet care needs, organic products, beauty and hygienic products at the best price.
                        We aim to deliver hassle free contact less online grocery shopping services to our customers.
                    </p>
                    <p class="color:gray;">Install the GMR grocery app now and get your groceries delivered
                        in 20+ cities across India.</p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">

                <p>Gallery</p>
            </div>

            <div class="row" data-aos-delay="100">

            </div>

            <div class="row portfolio-container" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-22.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-22.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>App 1</h4>
                <p>App</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-23.jpeg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-23.jpeg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Web 3</h4>
                <p>Web</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-24.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-24.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>App 2</h4>
                <p>App</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-25.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-25.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Card 2</h4>
                <p>Card</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-26.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-26.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Web 2"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Web 2</h4>
                <p>Web</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-27.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-27.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="App 3"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>App 3</h4>
                <p>App</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-28.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-28.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Card 1"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Card 1</h4>
                <p>Card</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-29.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-29.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Card 3"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Card 3</h4>
                <p>Card</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('images/portfolio/portfolio-30.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{asset('images/portfolio/portfolio-30.jpg')}}" data-gall="portfolioGallery"
                                class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                        </div>
                        <div class="portfolio-info">
                            <!-- <h4>Web 3</h4>
                <p>Web</p> -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Contact us the get started</p>
            </div>

            <div class="row">

                <div class="col-lg-5  d-flex align-items-stretch" data-aos-delay="100">
                    <div class="info ">
                        <div class="address pt-5">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Jeeman Circle,
                                Near NR Function Hall
                                Kadiri-515591 ,Andhra Pradesh</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>Support@gmrgrocery.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 99593 43956</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos-delay="200" style="height: 50%;">

                    <form action="{{('')}}" method="post" class="for-d">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" required />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" required />

                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Send Message"
                                style="background: #fe2c2b; color: white; border: none;    padding: 7px 19px;">



                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <section>
      
    
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.4470139719465!2d78.16164291483452!3d14.10978909011658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDA2JzM1LjIiTiA3OMKwMDknNDkuOCJF!5e0!3m2!1sen!2sin!4v1611215616388!5m2!1sen!2sin"
            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>

    <!-- End Contact Us Section -->

</main><!-- End #main -->
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







<!-- privacy -->
<div class="modal fade" id="privacy" tabindex="-1" data-dismiss="modal" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="    font-weight: 700;
    font-size: 28px;">Privacy policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 33px;
    text-align: justify;
    padding: 21px;">
                    GMR Grocery completely reserves the right to edit, modify or delete the privacy policy independently
                    without
                    any prior information. During the progression of the website, we may include new technologies and
                    policies
                    to improve our services.
                    We use your personal information to improve your search options on the website.

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- turm and condiation -->
<div class="modal fade" id="turm" tabindex="-1" data-dismiss="modal" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="" style=" font-weight: 700;
    font-size: 28px;">Terms and conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 33px;
    text-align: justify;
    padding: 21px;">
                    It is a legal requirement to bond between users and GMR Grocery regarding the services that are
                    offered by
                    the company. If you are using any of
                    the provided services then you are subject to the guidelines, rules, terms and conditions of the
                    website.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- refund -->
<div class="modal fade" id="refund" tabindex="-1" data-dismiss="modal" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="    font-weight: 700;
    font-size: 28px;">Refund policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="line-height: 33px;
    text-align: justify;
    padding: 21px;">
                    The refund procedure will be starting after the approval of your refunds.
                    It usually takes 48 hours or 6-7 working days to credit in a customer's account.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
@endsection
