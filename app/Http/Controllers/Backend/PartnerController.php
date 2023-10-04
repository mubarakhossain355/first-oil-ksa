<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $partners = Partner::query();

        if ($request->searchKeyword) {
            $partners->where('name',  'LIKE', "%$request->searchKeyword%");
                    
        }

        $partners = $partners->orderBy('name')->paginate(10);

        return view('backend.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
        ]);

        $partner = new Partner();

        if ($request->hasFile('photo')) {   
            $partner->photo = $request->file('photo')->store('partner'); 
        }

        $partner->name = $request->name;
        $partner->company_url = $request->company_url;
        $partner->status = $request->status;
        $partner->save();
        
        Alert::toast('Business Partner successfully created', 'success');

        return redirect()->route('admin.partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
        ]);

        if ($request->hasFile('photo')) {

            if (Storage::exists($partner->photo)) {
                Storage::delete($partner->photo);
            }

            $partner->photo = $request->file('photo')->store('partner'); 
        }

        $partner->name = $request->name;
        $partner->company_url = $request->company_url;
        $partner->status = $request->status;
        $partner->save();
        
        Alert::toast('Business Partner successfully updated', 'success');

        return redirect()->route('admin.partner.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        if (Storage::exists($partner->photo)) {
            Storage::delete($partner->photo);
        }

        $partner->delete();

        Alert::toast('Partner successfully deleted', 'success');

        return redirect()->back();
    }
}
