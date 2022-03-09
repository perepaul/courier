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
                                <input id="full-n" type="text" name="name" class="@error('name') error @enderror" value="{{old('name')}}">
                                <label for="full-n">Name of recipient</label>
                                @error('name')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field">
                                <input id="title" type="text" class="@error('phone') error @enderror" name="phone" value="{{old('phone')}}">
                                <label for="title">Recipient phone</label>
                                @error('phone')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="input-field">
                                <input id="com1" type="text" name="address" class="@error('address') error @enderror" value="{{old('address')}}">
                                <label for="com1">Recipient address</label>
                                @error('address')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="input-field">
                                <input id="em1" type="email" name="email" class="@error('email') error @enderror" value="{{old('email')}}">
                                <label for="em1">Email</label>
                                @error('email')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image" class="@error('image') error @enderror">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                    @error('image')
                                    <div class="errorTxt4">
                                        <div id="cpassword-error" class="error">{{$message}}</div>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l12">
                            <div class="input-field">
                                <input id="from_name" type="text" name="from_name" class="@error('from_name') error @enderror" value="{{old('from_name')}}">
                                <label for="from_name">Sender name</label>
                                @error('from_name')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field">
                                <input id="com2" type="text" class="@error('from_address') error @enderror" name="from_address" value="{{old('from_address')}}">
                                <label for="com2">From address</label>
                                @error('from_address')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!--Material textarea-->
                        <div class="input-field col s12">
                            <textarea id="description" name="description" class="@error('description') error @enderror materialize-textarea">{{old('description')}}</textarea>
                            <label for="description">Parcel</label>
                            @error('description')
                            <div class="errorTxt4">
                                <div id="cpassword-error" class="error">{{$message}}</div>
                            </div>
                            @enderror
                        </div>

                        <div class="col s12 m4">
                            <div class="input-field">
                                <input id="poiodjfpoiejfpojdfpiop" class="@error('quantity') error @enderror" type="text" name="quantity" value="{{old('quantity')}}">
                                <label for="poiodjfpoiejfpojdfpiop">Quantity</label>
                                @error('quantity')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="input-field">
                                <input id="insurance" type="text" class="@error('insurance') error @enderror" name="insurance" value="{{old('insurance')}}">
                                <label for="insurance">Insurance</label>
                                @error('insurance')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="input-field">
                                <input id="oiodfoidnfoidf" class="@error('price') error @enderror" type="text" name="price" value="{{old('price')}}">
                                <label for="oiodfoidnfoidf">Price</label>
                                @error('price')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m6">
                            <div class="input-field">
                                <input id="oiodfoidnfoidf" class="@error('created_at') error @enderror" type="date" name="created_at" value="{{old('created_at')}}">
                                <label for="oiodfoidnfoidf">Order Date</label>
                                @error('created_at')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col s12 m6">
                            <div class="input-field">
                                <input id="oiodfoidnfoidf" class="@error('delivered_at') error @enderror" type="date" name="delivered_at" value="{{old('delivered_at')}}">
                                <label for="oiodfoidnfoidf">Estimated Delivery Date</label>
                                @error('delivered_at')
                                <div class="errorTxt4">
                                    <div id="cpassword-error" class="error">{{$message}}</div>
                                </div>
                                @enderror
                            </div>
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

@section('css')
<style>
    .red {
        border: 1px red solid;
    }

    .has-error {
        col
    }
</style>
@endsection

@section('js')
@if($errors->any())
@foreach($errors as $error)
<script>
    alert('erros detected')

    M.toast({
        html: '{{$error}}',
        classes: 'rounded red'
    });
</script>
@endforeach
@endif
@endsection
