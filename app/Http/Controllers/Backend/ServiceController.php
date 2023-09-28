<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::with('serviceCategory');

        if ($request->searchKeyword) {
            $services->where('title',  'LIKE', "%$request->searchKeyword%");
        }

        $services = $services->orderBy('title')->paginate(10);

        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceCategories = ServiceCategory::orderBy('name')->get();
        return view('backend.service.create',compact('serviceCategories'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function fileUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $fileName = $request->file('upload')->store('service/details');
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/'. $fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
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
            'title' => 'required|max:191',
            'service_category_id' => 'required|min:1|integer',
            'status' => 'required|in:Draft,Published',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->service_category_id = $request->service_category_id;
        $service->details = $request->details;
        $service->status = $request->status;
        $service->featured_image = $request->file('featured_image')->store('service');
        $service->save();
        
        Alert::toast('Service successfully created', 'success');

        return redirect()->route('admin.service.index');
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
    public function edit(Service $service)
    {
        $serviceCategories = ServiceCategory::orderBy('name')->get();

        return view('backend.service.edit', compact('serviceCategories',  'service')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'service_category_id' => 'required|min:1|integer',
            'status' => 'required|in:Draft,Published',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->service_category_id = $request->service_category_id;
        $service->details = $request->details;
        $service->status = $request->status;

        if ($request->hasFile('featured_image')) {

            if (Storage::exists($service->featured_image)) {
                Storage::delete($service->featured_image);
            }
        
            $service['featured_image'] = $request->file('featured_image')->store('service');
        }

        $service->save();
        
        Alert::toast('Service successfully updated', 'success');

        return redirect()->route('admin.service.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

        if (Storage::exists($service->featured_image)) {
            Storage::delete($service->featured_image);
        }
        
        $service->delete();

        Alert::toast('Service successfully deleted', 'success');

        return redirect()->route('admin.service.index');
    }
}
