@extends('Layouts.website')
@section('content')


<section class="hero-wrap hero-wrap-2 degree-right"
    style="background-image: url({{ asset('public/Assets/Frontend') }}/images/about.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
            <div class="col-md-9 ftco-animate pb-5 mb-5">
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                    </span> <span>About us <i class="fa fa-chevron-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">About us</h2>
            </div>
        </div>



        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div data-aos="slide-right" class="overflow-hidden card nav flex-column nav-pills" id="v-pills-tab"
                    role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-tab1" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">
                        <div class="ftco-animate">
                            <div class="media block-6 w-100 services d-block text-center">
                                <div class="display-4 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-vector"></span></div>
                                <div class="media-body">
                                    <h3>UI/UX Design</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-tab2" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">
                        <div class="d-flex align-items-stretch ftco-animate">
                            <div class="media block-6 w-100 services d-block text-center">
                                <div class="display-4 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-web-programming"></span></div>
                                <div class="media-body">
                                    <h3>Web Development</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-tab3" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">
                        <div class="d-flex align-items-stretch ftco-animate">
                            <div class="media block-6 w-100 services d-block text-center">
                                <div class="display-4 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-layer"></span></div>
                                <div class="media-body">
                                    <h3>Product Design</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-tab4" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">
                        <div class="d-flex align-items-stretch ftco-animate">
                            <div class="media block-6 w-100 services d-block text-center">
                                <div class="display-4 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-coding"></span></div>
                                <div class="media-body">
                                    <h3>Mobile Apps</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-tab5" data-toggle="pill" href="#" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">
                        <div class="d-flex align-items-stretch ftco-animate">
                            <div class="media block-6 w-100 services d-block text-center">
                                <div class="display-4 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-zoom"></span></div>
                                <div class="media-body">
                                    <h3>SEO</h3>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <style>
            .wrap-about.border-left-2px.position-relative::before {
                content: "";
                height: 100%;
                width: 5px;
                position: absolute;
                background: #007bff;
                z-index: 777;
            }
            </style>

            <div class="col-md-10 col-sm-12 mt-md-0 mt-2 tab-content">

                <div class="wrap-about border-left-2px fade position-relative tab-pane mb-2 show active"
                    data-aos="slide-left" role="tabpanel" aria-labelledby="profile-tab-3" id="profile-tab-3">
                    <div class="card p-2">
                        <h3>Welcome to AVO A Personal Porfolio Web Agency</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth.</p>

                    </div>
                </div>
                <div class="wrap-about border-left-2px fade position-relative tab-pane mb-2 show active"
                    data-aos="slide-left" role="tabpanel" aria-labelledby="profile-tab-4" id="profile-tab-4">
                    <div class="card p-2">
                        <h3>Welcome to AVO A Personal Porfolio Web Agency</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth.</p>

                    </div>
                </div>
                <div class="wrap-about border-left-2px fade position-relative tab-pane mb-2 show active"
                    data-aos="slide-left" role="tabpanel" aria-labelledby="profile-tab-5" id="profile-tab-5">
                    <div class="card p-2">
                        <h3>Welcome to AVO A Personal Porfolio Web Agency</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in
                            which roasted parts of sentences fly into your mouth.</p>

                    </div>
                </div>
            </div>
        </div>




        <div class="row pt-5">
            <div class="col-md-12">
                <div class="intro p-md-4 py-md-5 p-2 rounded img" style="background-image: url(images/bg_1.jpg);">
                    <div class="col-md-6 ftco-animate">
                        <span>Get Started</span>
                        <h2>Fill in the brief and get the project estimate</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Get started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">Expert Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-1.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">John <br>Wilson</h3>
                            <span class="position mb-4">Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-2.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Robert <br>Wills</h3>
                            <span class="position mb-4">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-3.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Mike <br>Smith</h3>
                            <span class="position mb-4">Graphic Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-4.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Adrian <br>Henderson</h3>
                            <span class="position mb-4">System Analyst</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-5.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">John <br>Wilson</h3>
                            <span class="position mb-4">Web Programmer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-6.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Robert <br>Wills</h3>
                            <span class="position mb-4">Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-7.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Mike <br>Smith</h3>
                            <span class="position mb-4">Graphic Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url(images/team-8.jpg);">
                            <ul class="ftco-social">
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-google"></span></a></li>
                                <li class="ftco-animate d-flex"><a href="#"
                                        class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">
                        <div class="desc">
                            <h3 class="mb-2">Adrian <br>Henderson</h3>
                            <span class="position mb-4">SEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="degree-left"></div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-3">Clients Says About Us?</h2>
            </div>
        </div>
        <div class="row ftco-animate mb-4">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection