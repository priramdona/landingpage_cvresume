<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CV Resume maker</title>

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CV Resume maker free">

        <!-- Font -->
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

           <!-- Main css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "CV Resume maker - Make CV for Free",
            "description": "Complete to submit Proffesional CV",
            "url": "https://www.priram.com"
            }
            </script>

    </head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo_priram_new.png"  style="width: 120px; height: 99px;" class="img-fluid" alt="CV Resume maker for Free"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home"> {{ __('landing.home') }}<span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">{{ __('landing.feature') }}</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">{{ __('landing.media') }}</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#aboutus">{{ __('landing.about_us') }}</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">{{ __('landing.contact') }}</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="https://cvresumemaker.priram.com/">{{ __('landing.create_cv') }}</a> </li>
                                <li class="dropdown">
                               <a class="nav-link" href="#">{{ __('landing.language') }}</a>
                                <ul class="dropdown-content">
                                    <li><a href="{{ route('setLocale', 'id') }}">Indonesia</a></li>
                                    <li><a href="{{ route('setLocale', 'en') }}">English</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>CV Resume Maker</h1>
            <h2>{{ __('landing.welcome_desc') }}</h2>
            <p class="tagline">{{ __('landing.welcome_tagline') }}</p>
        </div>
        <div class="img-holder mt-3"><img src="images/login_prorotype.png" alt="CV Reume Maker" class="img-fluid"></div>
    </header>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>{{ __('landing.highlights') }}</small>
                <h3>{{ __('landing.feature_highlights') }}</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-layout-sidebar-left gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">{{ __('landing.info_form') }}</h4>
                                    <p class="card-text">{{ __('landing.info_form_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-files gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">{{ __('landing.template') }}</h4>
                                    <p class="card-text">{{ __('landing.template_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-download gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">{{ __('landing.format_pdf') }}</h4>
                                    <p class="card-text">{{ __('landing.format_pdf_desc') }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>{{ __('landing.find_me') }}</h2>
                    <p class="mb-4">{{ __('landing.find_me_tagline') }}</p>
                    <a href="#download" class="btn btn-primary">{{ __('landing.download_now') }}</a>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="images/perspective.png" alt="CV Resume maker" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->



    <!-- // end .section -->

    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/prespective_elegant.png" alt="CV Resume Maker" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>{{ __('landing.launch_app') }}</h2>
                        <p class="mb-4">{{ __('landing.launch_app_desc') }}</p>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>{{ __('landing.step_1') }}</h5>
                                <p>{{ __('landing.step_1_desc') }}</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>{{ __('landing.step_2') }}</h5>
                                <p>{{ __('landing.step_2_desc') }}</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>{{ __('landing.step_3') }}</h5>
                                <p>{{ __('landing.step_3_desc') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/pendaftaran_prototype.jpg" alt="Registration CV Resume maker" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>{{ __('landing.gallery') }}</small>
                <h3>{{ __('landing.gallery_data') }}</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/0.png">
                <img src="images/1.png">
                <img src="images/2.png">
                <img src="images/3.png">
                <img src="images/4.png">
                <img src="images/5.png">
                <img src="images/6.png">
                <img src="images/7.png">
                <img src="images/8.png">
                <img src="images/9.png">
            </div>
        </div>
    </div>
    <div class="section" id="aboutus">
        <div class="container">
            <div class="section-title">
                <h3>{{ __('landing.about_us') }}</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h5 class="mb-3">{{ __('landing.about_us_info') }}</h5>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">{{ __('landing.vision') }}</h4>
                    <p class="mb-5">{{ __('landing.vision_info') }}</p>

                    <h4 class="mb-3">{{ __('landing.mision') }}</h4>
                    <p class="mb-5">{{ __('landing.mision_info') }}</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="section bg-gradient" id="download">
        <div class="container">
            <div class="call-to-action">

                <!-- <div class="box-icon"> -->
                    <img src="images/logo.jpg" alt="CV Resume Maker" style="width: 150px; height: 150px;"/>
                <!-- </div> -->
                <h2>{{ __('landing.install_now') }}</h2>
                <p class="tagline">{{ __('landing.free_lifetime') }}</p>
                <div class="my-4">

                    <!-- <a href="#" class="btn btn-light"><img src="images/appleicon.png" alt="icon"> App Store</a> -->
                    <a href="#" class="btn btn-light"><img src="images/playicon.png" alt="Aplikasi CV Resume maker"> Google play</a>
                </div>
                <p class="text-primary"><small><i>{{ __('landing.minimum_spec') }}</i></small></p>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <div class="p-4 mb-3 shadow mb-4">
                    <p class="mb-0 font-weight-bold"><i class="fa fa-map-location-dot"></i> {{ __('home.address') }}</p>
                    <p class="mb-4">{{ __('home.address_us') }}</p>

                    <p class="mb-0 font-weight-bold"><i class="fa-brands fa-whatsapp"></i> {{ __('home.whatsapp_us') }}</p>
                    <p class="mb-4">{{ __('home.no_whatsapp_us') }}</a></p>

                    <p class="mb-0 font-weight-bold"><i class="fa-regular fa-envelope"></i> {{ __('home.email_us') }}</p>
                    <p class="mb-0"><a href="#">{{ __('home.email_us_address') }}</a></p>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
            {{-- <a href="https://www.priram.com">www.priram.com</a> --}}

        <small>
            <a class="btn btn-link text-white-50" href="https://cvresumemaker.priram.com/about">{{ __('home.about_us') }}</a>
            <a class="btn btn-link text-white-50" href="{{ route('terms') }}">{{ __('home.terms') }}</a>
            <a class="btn btn-link text-white-50" href="{{ route('privacy') }}">{{ __('home.privacy') }}</a>
            <a class="btn btn-link text-white-50" href="#contact">{{ __('home.contact_us.title') }}</a>
        </small>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
