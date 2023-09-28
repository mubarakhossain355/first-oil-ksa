<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $serviceCategories = ServiceCategory::query();

        if ($request->searchKeyword) {
            $serviceCategories->where('name',  'LIKE', "%$request->searchKeyword%");
        }

        $serviceCategories = $serviceCategories->orderBy('name')->paginate(10);

        return view('backend.service_category.index', compact('serviceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service_category.create');
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
            'status' => 'required|in:Active,Inactive',
        ]);

        $serviceCategory = new ServiceCategory();
        $serviceCategory->name = $request->name;
        $serviceCategory->status = $request->status;
        $serviceCategory->save();

        Alert::toast('Service Category successfully created', 'success');
        return redirect()->route('admin.serviceCategory.index');
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
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('backend.service_category.edit', compact('serviceCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'status' => 'required|in:Active,Inactive',
        ]);

        
        $serviceCategory->name = $request->name;
        $serviceCategory->status = $request->status;
        $serviceCategory->save();

        Alert::toast('Service Category successfully updated', 'success');
        return redirect()->route('admin.serviceCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        Alert::toast('Service Category successfully deleted', 'success');

        return redirect()->back();
    }
}
