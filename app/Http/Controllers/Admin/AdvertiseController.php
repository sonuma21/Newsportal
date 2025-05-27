<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises= Advertise::all();
        return view('admin.advertise.index',compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)


    {
        $request-> validate ([
          "company_name"=>"required|max:50",
          "phone"=>"required|digits:10",
          "link"=>"required"
        ]);

        $advertise = New Advertise();
        $advertise->company_name = $request->company_name;
        $advertise->phone = $request->phone;
        $advertise->link = $request->link;


        $file = $request->file('ads_banner');
        if($file){
            $newName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $advertise->ads_banner='images/'.$newName;
        }
        $advertise->save();

        return redirect()->route('admin.advertise.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertise = Advertise::findOrfail($id);
        return view('admin.advertise.edit',compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        {
            $request-> validate ([
              "company_name"=>"required|max:50",
              "phone"=>"required|digits:10",
              "link"=>"required"
            ]);

            $advertise =Advertise::find($id);
            $advertise->company_name = $request->company_name;
            $advertise->phone = $request->phone;
            $advertise->link = $request->link;
            $advertise->status=$request->status;


            $file = $request->file('ads_banner');
            if($file){
                $newName = time().".".$file->getClientOriginalExtension();
                $file->move('images',$newName);
                $advertise->ads_banner='images/'.$newName;
            }
            $advertise->update();

            return redirect()->route('admin.advertise.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise = Advertise::find($id);
            $advertise->delete();
            return redirect()->route('admin.advertise.index');
    }
}
