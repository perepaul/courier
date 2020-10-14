@extends('layouts.front')
@section('content')
<article>
<section class="banner banner-style2 mask-overlay pt-120 white-clr">
    <div class="pad-30 hidden-xs"></div>
    <div class="container theme-container rel-div pb-15">
        <!-- <img class="pt-10 effect animated fadeInLeft" alt="" src="{{asset('uploads/front/icons/icon-1.png')}}" /> -->
        
        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
            Trac<span class="theme-clr">king </span> 
        </h2>
    <div class="pad-50 hidden-xs">&nbsp;</div>

    </div>
</section>
        <!-- Breadcrumb -->
        <!-- <section class="theme-breadcrumb pad-50">
            <div class="theme-container container ">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> product tracking </h2>
                            <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>
                            <li class="active">Track</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- /.Breadcrumb -->

        <!-- Tracking -->
        <section class="pt-50 pb-120 tracking-wrap">
            <div class="theme-container container ">
                <div class="row pad-10">
                    <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                        <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                        <div class="row">
                            <form action="{{route('shipment.tracking')}}" method="post" >
                                @csrf
                                <div class="col-md-7 col-sm-7">
                                    <div class="form-group">
                                        <input type="text" name="code" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @isset($shipment)
                <div class="row">
                    <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s">
                        <img alt="" src="{{asset(config('app.package_dir').'/'.$shipment->image)}}" />
                    </div>
                    <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s">
                        <div class="prod-info white-clr">
                            <ul>
                                <li> <span class="title-2">Product Name:</span> <span class="fs-16">{{$shipment->name}}</span> </li>
                                <li> <span class="title-2">Tracking code:</span> <span class="fs-16">{{$shipment->code}}</span> </li>
                                <li> <span class="title-2">order date:</span> <span class="fs-16">{{$shipment->created_at}}</span> </li>
                                <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr">{{$shipment->status}}</span> </li>
                                <!-- <li> <span class="title-2">weight (kg):</span> <span class="fs-16">0.85 KG</span> </li>
                                <li> <span class="title-2">order type:</span> <span class="fs-16">Basic ($50)</span> </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- <div class="progress-wrap">
                    <div class="progress-status">
                        <span class="border-left"></span>
                        <span class="border-right"></span>
                        <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                        <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s"> <span class="dot dot-center theme-clr-bg"></span> </span>
                        <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                    </div>
                    <div class="row progress-content upper-text">
                        <div class="col-md-3 col-xs-8 col-sm-2">
                            <p class="fs-12 no-margin"> FROM </p>
                            <h2 class="title-1 no-margin">{{$shipment->from_address}}</h2>
                        </div>
                        <div class="col-md-2 col-xs-8 col-sm-3">
                            <p class="fs-12 no-margin"> [ <b class="black-clr">6 DAYS </b> ] </p>
                        </div>
                        <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                            <p class="fs-12 no-margin"> currently in </p>
                            <h2 class="title-1 no-margin">singapore</h2>
                        </div>
                        <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                            <p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>
                        </div>
                        <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                            <p class="fs-12 no-margin"> to </p>
                            <h2 class="title-1 no-margin">dhaka</h2>
                        </div>
                    </div>
                </div> -->
               
                <center>
                <div>
                    <h2 class="title-6">{{$shipment->from_address}}</h2>
                </div>
                @foreach($shipment->tracks()->get() as $tracks)
                @if($loop->last)
                <div class="border-left"></div>
                <div>
                    <small>[ {{$tracks->created_at->format('d M Y')}} ]</small>
                    <h2 class="title-1">{{$tracks->address}}</h2>
                    <small class="theme-clr">[ Current Location ]</small>
                </div>
                @else
                <div class="border-left"></div>
                <div>
                    <small>[ {{$tracks->created_at->format('d M Y')}} ]</small>
                    <h2 class="title-1">{{$tracks->address}}</h2>
                </div>
                @endif
                
                @endforeach
                <div class="border-left"></div>
                <div class="">
                    <h2 class="title-6">{{$shipment->address}}</h2>
                    <small>[ Destination ]</small>
                </div>

                </center>
    
                @else
                <div class="container">
                    <div class="alert alert-danger pad-30" role="alert">
                        <p>We were unable to find your package!</p>
                    </div>
                </div>
                @endisset
            </div>
        </section>
        <!-- /.Tracking -->

    </article>
@endsection