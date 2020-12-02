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
                    <strong>Edwin Stefan</strong> <br>
                    <strong>Phone:</strong> {{config('app.phone')}} <br>
                    <strong>Address:</strong> {{config('app.address')}} <br>
    
                </td>
                <td class="col-md-4 p-0 m-0 p-1">
                    To <br>
                    <strong>Name here</strong> <br>
                    <strong>Phone:</strong> phone here <br>
                    <strong>Address:</strong> and a very long or short address here <br>
    
    
                </td>
                <td class="col-md-4 p-0 m-0 p-1">
                    <div class="barcode-wrapp text-center d-block">
                        <img src="{{asset('uploads/images/barcode.png')}}" alt="" style="width:60px; display:block;padding:0; margin:0">
                        <small style="display: block; margin:0; padding:0; font-size:8px">randon numbers</small>
                    </div>
                    <strong>Order ID</strong> 1 <br>
                    <strong>Payment Status</strong> Paid <br>
                    <strong>Shipment Insurance</strong> $0.0
                </td>
            </tr>
        </table><br>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>some name here</td>
                    <td>InTransit</td>
                    <td>$2000</td>
                    <td>$4000</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>