@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title ">Shipments
                        <span style="float: right;">
                        <a class="btn btn-default" href="{{route('shipment.create')}}">
                            <i class="material-icons">add_circle</i> 
                        </a>
                        </span>
                    </h5>
                    <div class="table-responsive">
                        <table class="table bg-dark">
                            <thead>
                                <tr>
                                    <th>Traking</th>
                                    <th>Recipient</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($shipments as $shipment)
                                <tr>
                                    <td>{{$shipment->code}}</td>
                                    <td>{{$shipment->name}}</td>
                                    <td>{{$shipment->phone}}</td>
                                    <td>{{$shipment->created_at->format('d m, Y')}}</td>
                                    <td>
                                    <a href="{{route('shipment.edit',$shipment->id)}}" class="btn btn  btn-small"><i class="material-icons">edit</i></a>
                                    <form action="{{route('shipment.destroy',$shipment->id)}}" class="d-inline" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-small btn red"><i class="material-icons">delete</i></button>
                                    </form>
                                    <a href="{{route('shipment.show',$shipment->id)}}" class="btn btn-small btn cyan"><i class="material-icons">add</i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr >
                                    <td style="text-align: center;" colspan="5">No records found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="paginator-container">
                            {{$shipments->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection