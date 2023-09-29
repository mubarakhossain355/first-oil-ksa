<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\CareerContact;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CareerContactController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $careerContact = CareerContact::query();

        if ($request->searchKeyword) {
            $careerContact->where('name',  'LIKE', "%$request->searchKeyword%")
                    ->orWhere('email',  'LIKE', "%$request->searchKeyword%")
                    ->orWhere('contact_number',  'LIKE', "%$request->searchKeyword%");
        }

        $careerContact = $careerContact->orderBy('name')->paginate(10);

        return view('backend.career_contact.index', compact('careerContact'));
    }

     /**
     * Update the visitor feedback status in reverse.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(CareerContact $careerContact)
    {
        $status = $careerContact->status;
        $careerContact->status = $status;
        $careerContact->save();

        Alert::toast('Status successfully updated', 'success');

        return redirect()->back();
    }
}
