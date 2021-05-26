@extends('layouts.front')

@section('content')
    <span id="home"></span>
    <article>
        <!-- Banner -->
        <section class="banner banner-style2 mask-overlay pt-120 white-clr">
            <div class="pad-50 hidden-xs"></div>
            <div class="container theme-container rel-div">
                <img class="pt-10 effect animated fadeInLeft" alt="" src="{{ asset('uploads/front/icons/icon-1.png') }}" />
                <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                    <li><a href="#">fast</a></li>
                    <li><a href="#">secured</a></li>
                    <li><a href="#">worldwide</a></li>
                </ul>
                <h4 class="section-title effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                    <span class="fs-36">EXXON COURIER SERVICES. </span> <br> <span class="theme-clr fs-16"> courier &
                        Diplomatic delivery services</span> </h4>
                <div class="pad-30"></div>
                <div class="col-md-8 col-md-offset-2 tracking-form text-left effect animated fadeInUp">
                    <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your
                        product easily</span>
                    <div class="row">
                        <form method="POST" action="{{ route('shipment.tracking') }}">
                            @csrf
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <input type="text" name="code" class="form-control box-shadow" required=""
                                        placeholder="Enter your product ID">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <button class="btn-1">track your product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pad-10"></div>
                </div>
            </div>
        </section>
        <!-- /.Banner -->

        <!-- Feature-2 -->
        <section class="pad-50 feature feature-2 clrbg-before">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-sm-4">
                        <img alt="" src="{{ asset('uploads/front/icons/icon-2.png') }}" class="wow fadeInUp"
                            data-wow-offset="50" data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">Fast delivery</h2>
                            <p>172,000 people ready to deliver your parcel</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" src="{{ asset('uploads/front/icons/icon-3.png') }}" class="wow fadeInUp"
                            data-wow-offset="50" data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">secured service</h2>
                            <p>Over 1,783,839,007 parcels delivered yearly</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" src="{{ asset('uploads/front/icons/icon-4.png') }}" class="wow fadeInUp"
                            data-wow-offset="50" data-wow-delay=".20s" />
                        <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s">
                            <h2 class="title-1">worldwide shipping</h2>
                            <p>Over 180 countries and territories served</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Feature-2 -->

        <!-- About Us -->
        <span id="about-us"></span>
        <section class="pad-120 about-wrap about-2 clrbg-before">
            <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pt-80 visible-lg"></div>
                        <div class="about-us">
                            <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About
                                Us </h2>
                            <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                Exxon Courier services, is a USA integrated shipping company, active in ocean and inland
                                freight transportation and associated with a Diplomatic Delivery Services, such as supply
                                chain management and port operation. We have large container ships
                                and supply vessel operators in the world since 1996. Exxon Courier Services operates over 786
                                vessels and has a capacity of 4.1 million TEU. The company was founded in 1966.
                                Our Line operates over 786 vessels and has a capacity of 4.1 million TEU. The company was
                                founded in 1966. <br>
                            </p>
                            <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"><strong>Founded:</strong>
                                28 August 1966.</p>
                            <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"><strong>
                                    Headquarters:</strong> {{ config('app.address') }}</p>
                            <p class="wow fadeInRight" data-wow-offset="50" data-wow-delay=".25s"><strong>Founder:</strong>
                                Peters E. Casey.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img alt="" src="{{ asset('uploads/front/block/about-img.png') }}" class="wow slideInRight"
                            data-wow-offset="50" data-wow-delay=".20s" />
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-6 border wow slideLeft" data-wow-offset="50" data-wow-delay=".20s">
                            <h3 class="fs-16 wow fadeInUp text-dark"> Our Mission </h3>
                            <p>Our aim is to act as an indispensable partner to our clients by helping them build and
                                maximize sustainable competitive advantages. We do this by helping them get their products
                                to market quickly, efficiently, and safely. In addition to our expertly crafted and reliably
                                delivered logistics solutions, our clients can rest assured that every interaction will be
                                driven by integrity and respect, the fundamental principles of our business.</p>
                        </div>
                        <div class="col-md-6 border wow bounceUp" data-wow-offset="50" data-wow-delay=".20s">
                            <h3 class="fs-16 wow fadeInUp text-dark"> Our Goal </h3>

                            <p>Our mission is to deliver a positive, reliable experience to each and every one of our
                                clients while offering exceptional
                                value in the marketplace and setting the standard for professionalism in the logistic
                                solutions we provide.
                                In addition to operating our business profitably, we strive to operate it responsibly both
                                for our clients and our employees, for whom our goal is to provide a safe and secure work
                                environment. </p>
                        </div>
                        <!-- <div class="col-md-4 border wow fadeInDown" data-wow-offset="50" data-wow-delay=".20s">
                                <h3 class="fs-16 wow fadeInUp text-dark"> About </h3>
                            </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.About Us -->

        <!-- Steps -->
        <section class="steps-wrap mask-overlay pad-80">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Parcel Sent</h2>
                            <p class="gray-clr">Sender brings parcel <br> to any of our offices</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Traking Code</h2>
                            <p class="gray-clr">We send tracking code to <br>recipient to keep them updated </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                        <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                            <h2 class="title-3">Deliver</h2>
                            <p class="gray-clr">We get the parcel <br> Delivered to the recipient</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img
                    src="{{ asset('uploads/front/block/step-img.png') }}" alt="" /> </div>
        </section>
        <!-- /.Steps -->


        <!-- Calculate Your Cost -->
        <section class="calculate pt-100">
            <div class="theme-container container">
                <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> calculate </span>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('uploads/front/block/Courier-Man.png') }}" alt="" class="wow slideInLeft"
                            data-wow-offset="50" data-wow-delay=".20s" />
                    </div>
                    <div class="col-md-6">
                        <div class="pad-10"></div>
                        <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> calculate
                            your cost </h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                            Our pricing estimator for senders. Fill out the form below and get an estimated delivery charge
                            for your parcel.
                        </p>
                        <div class="calculate-form">
                            <form class="row">
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                    <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height"
                                            type="text" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                    <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width"
                                            type="text" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> depth (cm): </label></div>
                                    <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth"
                                            type="text" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                    <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight"
                                            type="text" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-6 no-pad">
                                            <input type="text" data-bind="in:value" data-name="locations[from]"
                                                placeholder="From" class="form-control from fw-600">
                                        </div>
                                        <div class="col-sm-6 no-pad">
                                            <input type="text" data-bind="in:value" data-name="locations[to]"
                                                placeholder="To" class="form-control to fw-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select data-bind="in:value" data-name="package"
                                                class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="select your package">
                                                <option value="cost">Usual Delivery</option>
                                                <option value="cost + 25">Fastest Delivery: + $25</option>
                                                <option value="cost*0.9">Discount Delivery: -10%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-9 col-xs-12 pull-right">
                                        <div class="btn-1"> <span> Total Cost: </span>
                                            <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                                <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap"
                                                    style="display: none;"><span class="pr">0</span></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="pt-80 hidden-lg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Calculate Your Cost -->

        <!-- Testimonial -->
        <span id="testimonials"></span>
        <section class="testimonial mask-overlay">
            <div class="theme-container container">
                <div class="testimonial-slider no-pagination pad-120">
                    <div class="item">
                        <div class="testimonial-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50"
                            data-wow-delay=".20s">
                            <img alt="" src="{{ asset('uploads/front/block/testimonial-1.png') }}" />
                            <span>,,</span>
                        </div>
                        <div class="testimonial-content">
                            <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"> <i class="gray-clr fs-16">
                                    This is by far the best courier company in USA, for same day and overnight
                                    deliveries.<br>
                                    I ordered an urgent delivery of some critical documents my sister needed in Birmingham.
                                    UK.<br>
                                    I was a bit doubtful as to the time of delivery but the customer service people advise
                                    me to use a diplomatic delivery service because I have <br> only two days to summit the
                                    documents.<br>
                                    I received it in less than 48 hours. expensive but fast and 100% relaible. Better than
                                    anyone. Highly recommended!
                                </i> </p>
                            <h2 class="title-2 pt-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"
                                    class="white-clr fw-900"> Riaz Hussain </a> </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-img darkclr-border theme-clr font-2">
                            <img alt="" src="{{ asset('uploads/front/block/testimonial-2.png') }}" />
                            <span>,,</span>
                        </div>
                        <div class="testimonial-content">
                            <p> <i class="gray-clr fs-16">
                                    I was so much disappointed with the service of a few infamous delivery companies
                                    recently,<br>
                                    but these guys made me believe the opposite still exists! :) Great service. <br>Thanks!
                                </i> </p>
                            <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Berty van Hensbergen </a> </h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-img darkclr-border theme-clr font-2">
                            <img alt="" src="{{ asset('uploads/front/block/testimonial-3.jpg') }}" />
                            <span>,,</span>
                        </div>
                        <div class="testimonial-content">
                            <p> <i class="gray-clr fs-16">
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla
                                    <br> facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                                    luptatum zzril delenit
                                    <br> augue duis dolore te feugait nulla facilisi.
                                </i> </p>
                            <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Bushra Ahsani </a> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Testimonial -->

        <!-- Product Delivery -->
        <section class="prod-delivery pad-120">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <div class="pt-120 rel-div">
                            <div class="pb-50 hidden-xs"></div>
                            <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Get the <span
                                    class="theme-clr"> fastest </span> delivery service </h2>
                            <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">From sending parcels,
                                documents, cargos, containers and <br>deplomatic delivery services
                                we got you covered! <br>
                                Our fast but very affordable shipping rates are designed to ensure <br>
                                your package gets to your recipient.</p>
                            <div class="pb-120 hidden-xs"></div>
                        </div>
                        <div class="delivery-img pt-10">
                            <img alt="" src="{{ asset('uploads/front/block/output-1-removebg-preview.png') }}"
                                class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Product Delivery -->

        <!-- Pricing & Plans -->
        <!-- <section class="pricing-wrap  pricing-2">
                        <div class="theme-container container">
                            <span class="bg-text center wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Pricing </span>
                            <div class="title-wrap text-center  pb-50">
                                <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">Pricing & plans</h2>
                                <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">See our pricing & plans to get best service</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="pricing-box clrbg-before clrbg-after transition">
                                        <div class="block-inline text-center">
                                            <div class="pad-10"></div>
                                            <h3 class="title-2"> Basic </h3>
                                            <h2 class="section-title fs-36">$50</h2>
                                            <p>for single product</p>
                                        </div>
                                        <div class="price-content-2">
                                            <ul class="title-2">
                                                <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                                <li> Country: <span class="gray-clr">  all</span> </li>
                                                <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                                <li> support: <span class="gray-clr">yes</span> </li>
                                            </ul>
                                        </div>
                                        <div class="text-center order-2">
                                            <a href="#" class="btn-round"> order now </a>
                                        </div>
                                        <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="pricing-box active">
                                        <div class="block-inline text-center">
                                            <div class="pad-10"></div>
                                            <h3 class="title-2"> Premium </h3>
                                            <h2 class="section-title fs-36">$250</h2>
                                            <p>for package product</p>
                                        </div>
                                        <div class="price-content-2">
                                            <ul class="title-2">
                                                <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                                <li> Country: <span class="gray-clr">  all</span> </li>
                                                <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                                <li> support: <span class="gray-clr">yes</span> </li>
                                            </ul>
                                        </div>
                                        <div class="text-center order-2">
                                            <a href="#" class="btn-round"> order now </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".40s">
                                    <div class="pricing-box clrbg-before clrbg-after transition">
                                        <div class="block-inline text-center">
                                            <div class="pad-10"></div>
                                            <h3 class="title-2"> standard </h3>
                                            <h2 class="section-title fs-36">$150</h2>
                                            <p>for multiple product</p>
                                        </div>
                                        <div class="price-content-2">
                                            <ul class="title-2">
                                                <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                                <li> Country: <span class="gray-clr">  all</span> </li>
                                                <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                                <li> support: <span class="gray-clr">yes</span> </li>
                                            </ul>
                                        </div>
                                        <div class="text-center order-2">
                                            <a href="#" class="btn-round"> order now </a>
                                        </div>
                                        <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
        <!-- /.Pricing & Plans -->

        <!-- Contact us -->
        <span id="contact-us"></span>
        <section class="contact-wrap contact-2 pad-120">
            <span class="bg-text center wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span> <br>
            <div class="theme-container container">
                <div class="title-wrap text-center">
                    <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                    <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">Get in touch with us easily</p>
                </div>
                <div class="row">
                    <div class="col-md-8 wow fadeInRight" data-wow-offset="50" data-wow-delay=".20s">
                        <form action="{{ route('send-mail') }}" method="post" class="text-black">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-outline-primary btn-flat btn-lg">Send <i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <ul class="contact-detail title-2">
                            <li class="wow slideInUp" data-wow-offset="25" data-wow-delay=".20s"> <span><i
                                        class="fa fa-phone"></i></span>
                                <p class="gray-clr"> {{ config('app.phone') }} </p>
                            </li>
                            <li class="wow slideInUp" data-wow-offset="25" data-wow-delay=".30s"> <span><i
                                        class="fa fa-envelope"></i></span>
                                <p class="gray-clr"> {{ config('app.email') }} </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Contact us -->
    </article>
@endsection
