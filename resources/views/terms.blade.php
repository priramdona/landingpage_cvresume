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

                    </nav>
                </div>
            </div>
        </div>
    </div>



    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>{{ __('terms.title') }}</h1>
        </div>
    </header>

    <section class="section-5 bg-2">
        <div class="container py-5">
            <div class="py-lg-2">&nbsp;</div>

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="space-y-12">
                        {{-- About the Application Section --}}
                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content1.title') }}</h5>
                            <p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content1.description') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content1.point1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content1.point2') }}</p>
                        </section>
                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content2.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content2.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content2.description2') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content3.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content3.description') }}</p>
                            <ul class="list-disc list-inside mt-4 text-gray-600 space-y-2">
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content3.point1') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content3.point1_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content3.point2') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content3.point2_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content3.point3') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content3.point3_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content3.point4') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content3.point4_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content3.point5') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content3.point5_text1') }}</p>
                                </li>
                            </ul>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content3.summary') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content4.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content4.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content4.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content4.description3') }}</p>
                        </section>
                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content5.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content5.description') }}</p>
                            <ul class="list-disc list-inside mt-4 text-gray-600 space-y-2">
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content5.point1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content5.point2') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content5.point3') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content5.point4') }}</p>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content6.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content6.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content6.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content6.description3') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content7.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description3') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description4') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description5') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content7.description6') }}</p>
                        </section>
                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content8.title') }}</h5>
                            <ul class="list-disc list-inside mt-4 text-gray-600 space-y-2">
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content8.point1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content8.point2') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content8.point2_text1') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content8.point2_text2') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content8.point2_text3') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content8.point2_text4') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content8.point2_text5') }}</p>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content9.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content9.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content9.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content9.description3') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content9.description4') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content9.description5') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content10.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content10.description') }}</p>
                        </section>
                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content11.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content11.description') }}</p>
                            <ul class="list-disc list-inside mt-4 text-gray-600 space-y-2">
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content11.point1') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content11.point1_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content11.point2') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content11.point2_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content11.point3') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content11.point3_text1') }}</p>
                                </li>
                                <li><p style="font-size: 14px; text-align: left;font-weight: bold">{{ __('terms.content11.point4') }}</p>
                                    <p style="font-size: 14px; text-align: left">{{ __('terms.content11.point4_text1') }}</p>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content12.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content12.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content12.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content12.description3') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content13.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content13.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content13.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content13.description3') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content13.description4') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content14.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content14.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content14.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content14.description3') }}</p>
                        </section>


                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content15.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content15.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content15.description2') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content16.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content16.description') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content17.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content17.description') }}</p>
                        </section>

                        <section>
                            <h5 class="text-2xl font-semibold text-gray-800">{{ __('terms.content18.title') }}</h5>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content18.description1') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content18.description2') }}</p>
                            <p style="font-size: 14px; text-align: left">{{ __('terms.content18.description3') }}</p>


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
                        </section>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <!-- <p class="mb-2"><small>Copyright © PT. Utama Yaksa Mandiri - www.priram.com</small></p> -->
            <a href="https://www.priram.com">www.priram.com</a>

        <small>
            <a href="{{ route('terms') }}" class="m-2">{{ __('terms.title') }}</a>
            <a href="{{ route('privacy') }}" class="m-2">{{ __('privacy.title') }}</a>
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
