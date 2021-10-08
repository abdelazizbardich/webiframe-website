@extends('front.layout')
@section('title',__('front.home'))
@section('content')
<style>
    .offer-price::before {
        content: "{{ __('front.from') }} ";
    }
</style>
    <main>
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-md-start">
                        <span class="text-uppercase">{{ __('front.welcome to') }} {{ __('front.'.config('app.name')) }}</span>
                        <hr>
                        <h1 class="h1">{{ __('front.Your website creation agency marrakech') }}</h1>
                            <a class="btn btn-primary btn-lg mt-3">{{ __('front.Contact us') }}</a>
                    </div>
                    <div class="d-none d-md-block col"></div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="m-2">{{ __('front.Our web services') }}</h2>
                        <p class="m-0">{{ __('front.We love what we do and our work is very creative') }}</p>
                        <p>{{ __('front.We design awesome stuff') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="service-card shadow">
                            <h3 class="h4 m-0">{{ __('front.Web development') }}</h3><br>
                            <img width="100" height="90" class="mb-2" src="{{ asset('images/service_img1.png')}}" alt="{{ __('front.Web development') }}">
                            <p class="m-0">{{ __('front.Website and web application design and creation, from conception to publishing') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="service-card shadow">
                            <h3 class="h4 m-0">{{ __('front.E-commerce') }}</h3><br>
                            <img width="100" height="90" class="mb-2" src="{{ asset('images/service_img2.png')}}" alt="{{ __('front.E-commerce') }}">
                            <p class="m-0">{{ __('front.Creation of merchant site, e-commerce platform with integration of all types of payment: paypal, mtc, etc') }}.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="service-card shadow">
                            <h3 class="h4 m-0">{{ __('front.Mobile applications') }}</h3><br>
                            <img width="100" height="90" class="mb-2" src="{{ asset('images/service_img3.png')}}" alt="{{ __('front.Mobile applications') }}">
                            <p class="m-0">{{ __('front.We profit from the design and development of ios and android mobile applications') }}.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="service-card shadow">
                            <h3 class="h4 m-0">{{ __('front.Seo') }}</h3><br>
                            <img width="100" height="90" class="mb-2" src="{{ asset('images/service_img4.png')}}" alt="{{ __('front.Seo') }}">
                            <p class="m-0">{{ __('front.We provide digital marketing and SEO strategies for campaigns') }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="presentation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md">
                        <span>{{ __('front.Why choosing us') }} ?</span>
                        <h2 class="m-0">{{ __('front.Increase your online visibility') }}</h2>
                        <p>{{ __("front.We are passionate about our work. Our designers stay ahead of the curve to deliver engaging and user-friendly website designs to make your business stand out. Our developers are committed to maintaining the highest web standards so that your site will stand the test of time. We care about your business, that's why we work with you") }}.</p>
                    </div>
                    <div class="col">
                        <div class="skills">
                            <div class="skill bg-success text-light shadow">
                                <div>
                                    <span class="skill-title"><span>15</span> {{ __('front.Success project') }}</span>
                                </div>
                                <div>
                                    <p>{{ __('front.Where you will find the same quality of service and dedication around the world') }}.</p>
                                </div>
                            </div>
                            <div class="skill bg-warning shadow">
                                <div>
                                    <span class="skill-title"><span>12</span> {{ __('front.Loyal customers') }}</span>
                                </div>
                                <div>
                                    <p>{{ __("front.What makes us one of the world's leading web design companies") }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiences">
            <div class="container">
                <div class="row align-items-center">
                    <div class="d-none d-md-block col">
                    </div>
                    <div class="col">
                        <span>{{ __('front.Experiences') }}</span>
                        <h2 class="m-0">{{ __('front.Pay for qualified service') }}</h2>
                        <p>{{ __('front.'.config('app.name')) }} {{ __('front.keeps one step ahead of digital marketing trends. Our success puts us ahead of the pack among our competitors with our ability to anticipate change and innovation') }}.</p>
                        <div class="exps">
                            <div class="exp">
                                <p class="m-0">{{ __('front.Website development and creation') }}</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% {{ __('front.Complete') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp">
                                <p class="m-0">{{ __('front.Mobile application development') }}</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% {{ __('front.Complete') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp">
                                <p class="m-0">{{ __('front.SEO Analysis and Referencing') }}</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% {{ __('front.Complete') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="exp">
                                <p class="m-0">{{ __('front.Social media management') }}</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% {{ __('front.Complete') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <h2 class="m-2">{{ __('front.Our completed projects') }}</h2>
                        <p class="m-0">{{ __('front.We love what we do and our work is very creative') }}.</p>
                        <p>{{ __('front.We design awesome stuff') }}</p>
                    </div>
                    <div class="projects col-12 mb-5">
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/Site-nozha-par-webiframe-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Nozha.ma</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/storluxy-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Storluxy.com: Site e-commerce de paiement à la livraison</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/ilaikom-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Ilaikom: site e-commerece wordpress</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/Neuline-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Neuline: Thème wordpress multi-langues</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/Stock-Management-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Stock Gardien: Système de gestion des stocks</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                        <div class="project shadow">
                            <a href="{{ route('project') }}"><img class="img-fluid" src="{{ asset('images/thedetrend-thumbnail-540x540.jpg')}}" alt=""></a>
                            <div class="project-detail p-2">
                                <a href="{{ route('project') }}"><p class="m-0 border-bottom p-2">Thedetrend: Blog d’actualité mondiale</p></a>
                                <p class="p-2 small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, magni. Quis earum, quibusdam temporibus facilis modi cum deleniti laudantium quas! Nam dignissimos consequatur accusantium quaerat eligendi, nemo exercitationem nihil amet!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btn-lg">{{ __('front.Show more +') }}</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="offers" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <h2 class="m-2">{{ __('front.Service plans') }}</h2>
                        <p class="m-0">{{ __('front.The best solutions for our customers') }}</p>
                    </div>
                    <div class="offers-grid col-12 mb-5">
                        <div class="offer bg-info text-light border">
                            <h3>{{ __('front.Custom') }}</h3>
                            <span class="d-block offer-price">750$</span>
                            <ul>
                                <li>{{ __('front.Custom design') }}<br>
                                    {{ __('front.Custom Features') }}<br>
                                    {{ __('front.Unlimited web page creation') }}</li>
                                <li>{{ __('front.Admin console') }}</li>
                                <li>{{ __('front.Domain name and Free hosting for the first year') }}</li>
                                <li>{{ __('front.Referencing (SEO) of your choice') }}</li>
                                <li>{{ __('front.Online Support') }}</li>
                                <li>{{ __('front.Professional emails') }}</li>
                            </ul>
                            <div class="col-12">
                                <a href="#" class="btn btn-warning btn-lg w-75 mb-5">{{ __('front.Get started') }}</a>
                            </div>
                        </div>
                        <div class="offer bg-danger text-light border">
                            <h3>{{ __('front.Catalogue') }}</h3>
                            <span class="d-block offer-price">350$</span>
                            <ul>
                                <li>{{ __('front.5 web pages') }}<br>
                                    {{ __('front.1 contact form') }}<br>
                                    {{ __('front.1 product catalog') }}
                                </li>
                                <li>{{ __('front.Admin console') }}</li>
                                <li>{{ __('front.Domain name and Free hosting for the first year') }}</li>
                                <li>{{ __('front.Referencing (SEO) of your choice') }}</li>
                                <li>{{ __('front.Online Support') }}</li>
                                <li>{{ __('front.Professional emails') }}</li>
                            </ul>
                            <div class="col-12">
                                <a href="#" class="btn btn-light btn-lg w-75 mb-5">{{ __('front.Get started') }}</a>
                            </div>
                        </div>
                        <div class="offer bg-success text-light border">
                            <h3>{{ __('front.E-commerce') }}</h3>
                            <span class="d-block offer-price">450$</span>
                            <ul>
                                <li>{{ __('front.Custom design') }}<br>
                                    {{ __('front.E-commerce features') }}<br>
                                    {{ __('front.Unlimited products and services') }}</li>
                                <li>{{ __('front.Admin console') }}</li>
                                <li>{{ __('front.Domain name and Free hosting for the first year') }}</li>
                                <li>{{ __('front.Referencing (SEO) of your choice') }}</li>
                                <li>{{ __('front.Online Support') }}</li>
                                <li>{{ __('front.Professional emails') }}</li>
                            </ul>
                            <div class="col-12">
                                <a href="#" class="btn btn-warning btn-lg w-75 mb-5">{{ __('front.Get started') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="audit" class="d-none d-md-block text-dark mt-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-3">
                        <h2 class="m-2">{{ __('front.Get Free SEO Analysis') }}</h2>
                        <p class="m-0">{{ __('front.We offer a free SEO audit for your website, so you can find the weak spots and how to improve them') }}.</p>
                    </div>
                    <div class="text-center col-8 mb-5">
                        <form action="/" method="post">
                            <div class="form-group">
                                <input type="url" class="form-control form-control-lg bg-white border-dark mb-3" name="website" placeholder="{{ __('front.Enter your website link') }}..." />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg w-25">{{ __('Send') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
