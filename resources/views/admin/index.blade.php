@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Welcome Back Admin!</h5>
                        <div class="row" bis_skin_checked="1">
                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card danger-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments)}}</h2>
                                                <h6 class="white-text op-5 light-blue-text">Total Shipments</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card info-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments->where('status','Pending'))}}</h2>
                                                <h6 class="white-text op-5">Pending</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">receipt</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card success-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments->where('status','Processing'))}}</h2>
                                                <h6 class="white-text op-5 text-darken-2">Processing</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card warning-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments->where('status','In Transit'))}}</h2>
                                                <h6 class="white-text op-5">In Transit</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card success-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments->where('status','Awaiting Clearance'))}}</h2>
                                                <h6 class="white-text op-5 text-darken-2">Awaiting Clearance</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l3 m6 s12" bis_skin_checked="1">
                                <div class="card warning-gradient card-hover" bis_skin_checked="1">
                                    <div class="card-content" bis_skin_checked="1">
                                        <div class="d-flex no-block align-items-center" bis_skin_checked="1">
                                            <div bis_skin_checked="1">
                                                <h2 class="white-text m-b-5">{{count($shipments->where('status','Delivered'))}}</h2>
                                                <h6 class="white-text op-5">Delivered</h6>
                                            </div>
                                            <div class="ml-auto" bis_skin_checked="1">
                                                <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
