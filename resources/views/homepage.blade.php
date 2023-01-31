@extends('homepage.layouts.app')
 
{{-- @section('title', 'Page Title') --}}
 
@section('content')
        @include('homepage.includes.navbar')

        <!-- Masthead-->
        <header class="masthead" id="home">
            {{-- <div class="container">
                <div class="masthead-subheading">Welcome To Our Shop</div> --}}
                <div class="masthead-heading text-uppercase">WELCOME TO OUR SHOP</div>
                
            </div>

        </header>

        <section class="page-section bg-light" id="announcement">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Announcement</h2>
                    <h3 class="section-subheading text-muted"></h3>
                
                <div class="carousel" data-flickity='{ "autoPlay": true }'>
                @foreach ($sliders as $sliderItem)
                    <div class="carousel-cell" style="background-image: url({{ asset($sliderItem->image)}})"></div>
                @endforeach
                </div>
            </div>
        </section>
        
         <!-- Product Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Product</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/rosey.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ROSE</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/sun.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SUNFLOWER</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/gerbera.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GERBERA</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/lily.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CALLALILY</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/sonia.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">DENBROIUM SONIA</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/breath.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BABY BREATH</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        {{-- <span class="fa-stack fa-4x"> --}}
                            {{-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> --}}
                        {{-- </span> --}}
                         <img class="img-fluid" src="assets/img/m.jpg" alt="..." />
                        <h4 class="my-3">Wedding</h4>
                        <p class="text-center">We take care of the floral arrangements for the wedding, including creating the bride's bouquet.</p>
                    </div>
                    <div class="col-md-4">
                        {{-- <span class="fa-stack fa-4x"> --}}
                            {{-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> --}}
                        {{-- </span> --}}
                         <img class="img-fluid" src="assets/img/b.jpg" alt="..." />
                        <h4 class="my-3">Birthday</h4>
                        <p class="text-center">We also specialize in planning and executing spectacular birthday celebrations and debuts that will leave a lasting impression on all of your guests.</p>
                    </div>
                    <div class="col-md-4">
                        {{-- <span class="fa-stack fa-4x"> --}}
                            {{-- <i class="fas fa-circle fa-stack-2x text-primary"></i> --}}
                            {{-- <i class="fas fa-lock fa-stack-1x fa-inverse"></i> --}}
                        {{-- </span> --}}
                         <img class="img-fluid" src="assets/img/w.jpg" alt="..." />
                        <h4 class="my-3">Funeral</h4>
                        <p class="text-center">We understand that organizing a funeral can be a difficult and emotional task, that's why we provide professional and compassionate support in planning and coordinating all aspects of the funeral service, to ensure that your loved one is honored in the most dignified and meaningful way.</p>
                    </div>
                </div>
            </div>
        </section>
            
       
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    {{-- <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <ul>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div> --}}
                        {{-- <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4> --}}
                                <h4 class="text-center subheading">Lea Flowershop</h4>
                            </div>
                            <div class="timeline-body"><p class="text-center">Lea flower shop is a retail establishment that specializes in the sale of cut flowers, bouquets, and floral arrangements. These shops may also sell a variety of potted plants, as well as vases and other accessories for flower arrangements. Some flower shops may also offer services such as delivery, custom arrangements, and event planning. They are often staffed by florists who have training and expertise in the art of flower arranging and can offer customers guidance and recommendations for selecting the perfect flowers for any occasion. The flower shop business model is based on the sale of flowers for events such as weddings, birthdays, funerals, or holidays. They also sell flowers for home decorations, garden plants and gift bouquets. Additionally, some flower shops also offer online ordering and home delivery services to make it more convenient for customers to purchase flow</p>
                            </div>
                        </div>
                    </ul>

                    <!-- Carousel -->
        
                    {{-- <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li> --}}
                    {{-- <li class="timeline-inverted">
                        <div class="timeline-image"> --}}
                           
                        </div>
                    </li>
                </ul>
            </div>
        </section>
            
            <br>
            <br>
            

                

        <!-- Owner-->
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">The Owner</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            {{-- <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." /> --}}
                            <h4></h4>
                            <p class="text-muted"></p>
                            {{-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class=""></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class=""></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class=""></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/Lea.jpg" alt="..." />
                            <h4>LEA E. JANDAYAN</h4>
                            <p class="text-muted"></p>
                            
                            <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/lea.jandayan?_rdc=1&_rdr!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    
                    </div>
                </div>
                <div class="row">
                   
                </div>
            </div>
        </section>
     
        
       <div class="container-fluid py-5" id = "contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>info@example.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+012 345 6789</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1154.9540391616752!2d125.54263330604942!3d8.95030946575832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c0408710105b%3A0xcb0bf88d37099743!2sBrgy.%20Leon%20Kilat%20Livelihood%20Center!5e1!3m2!1sen!2sph!4v1674618064259!5m2!1sen!2sph"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
        @include('homepage.includes.footer')
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ROSE</h2>
                                    {{-- <p class="item-intro text-muted">The rose is one of the best sellers due to its beauty and versatility as a symbol of love and affection.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Rosey.png" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SUNFLOWER</h2>
                                    {{-- <p class="item-intro text-muted">Sunflowers are one of the best sellers due to their bright and cheerful appearance and the symbol of adoration and loyalty they represent..</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Sun.png" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">                   
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">GERBERA</h2>
                                    {{-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Gerbera.png" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">                 
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CALLALILY</h2>
                                    {{-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lily.png" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">DENBROIUM SONIA</h2>
                                    {{-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Sonia.png" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">BABY BREATH</h2>
                                    {{-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Baby Breath.jpg" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        {{-- <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li> --}}
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection