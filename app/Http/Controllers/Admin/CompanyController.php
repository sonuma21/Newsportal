<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $company = Company::first();

    return view("admin.company.index", compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return  view("admin.company.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request-> validate ([
            "name"=> "required|max:50",
            "phone"=> "required|digits:10",
            "email"=> "required|max:50",
            "address"=> "required|max:50",
            "logo"=> "required|max:1024",

        ]);

        $company = New Company();
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->instagram = $request->instagram;

        $file = $request->file('logo');
        if($file){
            $newName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $company->logo='images/'.$newName;
        }
        $company->save();
        return redirect()->route('admin.company.index');
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
        $company=Company::findOrFail($id);
        return view("admin.company.edit", compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate ([
            "name"=> "required|max:50",
            "phone"=> "required|digits:10",
            "email"=> "required|max:50",
            "address"=> "required|max:50",
        ]);
        $company =Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->instagram = $request->instagram;

        $file = $request->file('logo');
        if($file){
            $newName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $company->logo='images/'.$newName;
        }
        $company->update();
        return redirect()->route('admin.company.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);
            $company->delete();
            return redirect()->route('admin.company.index');
    }
}
