<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }

        body {
            margin: 0 auto;
            font-size: 12px;
            border: 4px solid black;
            padding: 12px;
        }
    </style>
</head>

<body>
    <div>

        <div class="d-flex justify-content-between">
         
                <img src="{{asset('uploads/images/logo.png')}}" alt="lol">
            
         
                <p class="text-right">
                    {{now()->format('D d \of F, Y - g:i:sa')}}
                </p>
            
        </div>
        <table>
            <tr class="w-100">
                <td class="col-md-4 p-0 m-0 p-1">
                    From <br>
                    <strong>{{$shipment->from_name}}</strong> <br>
                    <strong>Phone:</strong> {{config('app.phone')}} <br>
                    <strong>Address:</strong> {{$shipment->from_address}} <br>
    
                </td>
                <td class="col-md-4 p-0 m-0 p-1">
                    To <br>
                    <strong>{{$shipment->name}}</strong> <br>
                    <strong>Phone:</strong> {{$shipment->phone}} <br>
                    <strong>Address:</strong> {{$shipment->address}}<br>
    
    
                </td>
                <td class="col-md-4 p-0 m-0 p-1">
                    <div class="barcode-wrapp text-center d-block">
                        <img src="{{asset('uploads/images/barcode.png')}}" alt="" style="width:60px; display:block;padding:0; margin:0">
                        <small style="display: block; margin:0; padding:0; font-size:8px">{{rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)}}</small>
                    </div>
                    <strong>Order ID</strong> {{$shipment->id}} <br>
                    <strong>Payment Status</strong> Paid <br>
                    <strong>Shipment Insurance</strong> ${{$shipment->insurance}}
                </td>
            </tr>
        </table><br>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$shipment->quantity}}</td>
                    <td>{{$shipment->description}}</td>
                    <td>{{$shipment->status}}</td>
                    <td>${{$shipment->price}}</td>
                    <td>${{$shipment->price * $shipment->quantity}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>