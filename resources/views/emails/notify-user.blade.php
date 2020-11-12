@component('mail::message')
# Hello {{$shipment->name}},

Your parcel have been packaged for shipment.  
Use **{{$shipment->code}}**, to track your parcel and get up to date information about your parcel.

@component('mail::button', ['url' => route('shipment.tracking')])
Track Package
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
