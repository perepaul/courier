@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                        <strong>Recipient name</strong> : {{$shipment->name}}
                    </div>
                    <div class="col s12"><strong>Address</strong> : {{$shipment->address}}</div>
                    <div class="col s12"><strong>Date</strong> : {{$shipment->created_at->format('d m, Y')}}</div>
                    <div class="col s12"><strong>Tracking code</strong> : {{$shipment->code}}</div>
                </div><br>
                <form action="{{route('shipment.update-status',$shipment->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field">
                                <select name="status" id="status">
                                    <option value="1" {{$shipment->status == 'Pending' ? 'selected':''}}>Pending</option>
                                    <option value="2" {{$shipment->status == 'Processing' ? 'selected':''}}>Proccessing</option>
                                    <option value="3" {{$shipment->status == 'In Transit' ? 'selected':''}}>In Transit</option>
                                    <option value="4" {{$shipment->status == 'Awaiting Clearance' ? 'selected':''}}>Awaiting Clearance</option>
                                    <option value="4" {{$shipment->status == 'Delivered' ? 'selected':''}}>Delivered</option>
                                </select>
                                <label for="status">Status</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="input-field">
                                <input id="com1" type="text" name="address">
                                <label for="com1">Current address</label>
                            </div>
                        </div>
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

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Tracks</h5>
                <ul>
                    @forelse($shipment->tracks()->get() as $track)
                    <li class="track">{{$track->created_at->format('d m, Y  g:ia')}}&nbsp; =>&nbsp; {{$track->address }} <span class="edit-btn" data-url="{{route('track.update-address',$track->id)}}" data-address="{{$track->address }}"><i class="material-icons">edit</i></button></li>
                    @empty
                    <li>No tracks found!</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')



<style>
    .track:hover .edit-btn {
        display: inline-block;
    }

    .edit-btn {
        color: blue;
        font-size: .81em;
        display: none;
        cursor: pointer;
    }
</style>
@endsection

@section('js')
<script>
    $(function(){
        $(document).on('click','.edit-btn',function(){
           var address = $(this).data('address');

           var newAddress = prompt('Update Address?', address);
           if(newAddress != null && address != newAddress){
               $.get($(this).data('url'),{
                   address:newAddress
               }).then((res)=>{
                   console.log(res)
               },
               (err)=>{
                   console.log(err)
               })
           }
        })
    })
</script>
@endsection