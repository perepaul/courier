@extends('layouts.admin')

@section('content')
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Shipments</h5>
                    <p>This is a starter page Loaded from laravel.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <form action="{{route('shipment.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                        <div class="row">
                            <div class="col m6 s12">
                                <div class="input-field">
                                    <input id="full-n" type="text" name="name">
                                    <label for="full-n">Name of recipient</label>
                                </div>
                            </div>
                            <div class="col m6 s12">
                                <div class="input-field">
                                    <input id="title" type="text" name="phone">
                                    <label for="title">Recipient phone</label>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="com1" type="text" name="address">
                                    <label for="com1">Recipient address</label>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <input id="em1" type="email" name="email">
                                    <label for="em1">Email</label>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                    </div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="com2" type="text" name="from_address">
                                    <label for="com2">From address</label>
                                </div>
                            </div>
                            <!--Material textarea-->
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                <label for="description">Parcel Description</label>
                            </div>

                            <!-- <div class="col s12">
                                <div class="input-field">
                                    <input id="con2" type="text">
                                    <label for="con2">Contact Number</label>
                                </div>
                            </div> -->
                            <!-- <div class="col s12">
                                <label>Existing Customer</label>
                                <p>
                                    <label>
                                        <input name="group1" type="radio" checked />
                                        <span>Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="group1" type="radio" />
                                        <span>No</span>
                                    </label>
                                </p>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="right">
                                    <button class="waves-effect waves-light btn cyan" type="submit">Save</button>
                                    <a class="waves-effect waves-light btn grey darken-4">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection