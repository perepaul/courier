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
                    <form action="{{route('shipment.update',$shipment->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('put')
                        <div class="row">
                            <div class="col m6 s12">
                                <div class="input-field">
                                    <input id="full-n" type="text" name="name" value="{{$shipment->name}}">
                                    <label for="full-n">Name of recipient</label>
                                </div>
                            </div>
                            <div class="col m6 s12">
                                <div class="input-field">
                                    <input id="title" type="text" name="phone" value="{{$shipment->phone}}">
                                    <label for="title">Recipient phone</label>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="com1" type="text" name="address" value="{{$shipment->address}}">
                                    <label for="com1">Recipient address</label>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="input-field">
                                    <input id="em1" type="email" name="email" value="{{$shipment->email}}">
                                    <label for="em1">Email</label>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea">{{$shipment->description}}</textarea>
                                <label for="description">Parcel Description</label>
                            </div>

                            <div class="col s12 m4">
                            <div class="input-field">
                                <input id="poiodjfpoiejfpojdfpiop" class="@error('quantity') error @enderror" type="text" name="quantity" value="{{$shipment->quantity}}">
                                <label for="poiodjfpoiejfpojdfpiop">Quantity</label>
                                @error('quantity')
                                <div class="errorTxt4"><div id="cpassword-error" class="error">{{$message}}</div></div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="input-field">
                                <input id="idifoiidnf" type="text" class="@error('insurance') error @enderror" name="insurance" value="{{$shipment->insurance}}" >
                                <label for="okdnfoiidnf">Insurance</label>
                                @error('insurance')
                                <div class="errorTxt4"><div id="cpassword-error" class="error">{{$message}}</div></div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="input-field">
                                <input id="oiodfoidnfoidf" class="@error('price') error @enderror" type="text" name="price" value="{{$shipment->price}}">
                                <label for="oiodfoidnfoidf">Price</label>
                                @error('price')
                                <div class="errorTxt4"><div id="cpassword-error" class="error">{{$message}}</div></div>
                                @enderror
                            </div>
                        </div>
                     
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="right">
                                    <button class="waves-effect waves-light btn cyan" type="submit">Update</button>
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