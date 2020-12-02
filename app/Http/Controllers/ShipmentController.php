<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use App\Models\tracks;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = shipment::paginate(10);
        return view('admin.shipment.index',compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string',
            'email'=>'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'from_address' => 'required',
            'description' => 'required',
            'insurance' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);
        // dd($request->all());
        $shipment =  new shipment($request->except('_token','image'));
        if($request->hasFile('image'))
        {
            $filename = now().'.'.$request->image->extension();
            $request->image->move(public_path(config('app.package_dir')),$filename);
            $shipment->image = $filename;
        }
        $shipment->code = Str::limit(uniqid(rand(10*45,80*75), true),15,'');
        $shipment->save();
        return redirect()->route('shipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(shipment $shipment)
    {
        return view('admin.shipment.add-tracks',compact('shipment'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateStatus(Request $request, $id)
    {
         $shipment = shipment::findOrFail($id);
         if($request->has('address') && !is_null($request->address)){
             $tracks = new tracks($request->except('_token','status'));
             $shipment->tracks()->save($tracks);
         }
         if($request->has('status') && !is_null($request->status)){
            // dd('here');
             $shipment->status = $request->status;
            //  dd($shipment->status);
             $shipment->save();
         }
         return redirect()->back();
    }

    public function editTrackAddress(Request $request, $id)
    {
        try{
            $track = tracks::findOrFail($id);
            $track->address = $request->input('address');
            $track->save();
            return response()->json('updated sucessfully',201);
        }catch(\Throwable $err){
            \Log::error($err);
            return response()->json([],400);
        }
    }

    public function tracking(Request $request)
    {
        $shipment = shipment::where('code',$request->code)->first();
        // dd($request->all());
        return view('front.tracking',compact('shipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(shipment $shipment)
    {
        return view('admin.shipment.edit',compact('shipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shipment $shipment)
    {
        $shipment->update($request->except('_token'));
        return redirect()->route('shipment.show',$shipment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(shipment $shipment)
    {
        $shipment->tracks()->delete();
        @unlink(public_path(config('app.package_dir').$shipment->image));
        $shipment->delete();
        session()->flash('message', 'Shipment deleted');
        return redirect()->route('shipment.index');
    }
}
