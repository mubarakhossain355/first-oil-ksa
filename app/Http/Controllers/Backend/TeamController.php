<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teams = Team::query();

        if ($request->searchKeyword) {
            $teams->where('name',  'LIKE', "%$request->searchKeyword%")
                    ->orWhere('designation',  'LIKE', "%$request->searchKeyword%")
                    ->orWhere('company',  'LIKE', "%$request->searchKeyword%");
        }

        $teams = $teams->orderBy('name')->paginate(10);

        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'designation' => 'required|max:191',
            'company' => 'required|max:191',

        ]);

        $team = new Team();

        if ($request->hasFile('photo')) {
            $team->photo = $request->file('photo')->store('team');
        }

        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->company = $request->company;
        $team->facebook_url = $request->facebook_url;
        $team->email_url = $request->email_url;
        $team->twitter_url = $request->twitter_url;
        $team->linkedin_url = $request->linkedin_url;
        $team->status = $request->status;
        $team->save();

        Alert::toast('Team successfully created', 'success');

        return redirect()->route('admin.team.index');
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
    public function edit(Team $team)
    {
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'designation' => 'required|max:191',
            'company' => 'required|max:191',
            
        ]);

        if ($request->hasFile('photo')) {

            if (Storage::exists($team->photo)) {
                Storage::delete($team->photo);
            }

            $team->photo = $request->file('photo')->store('team'); 
        }

        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->company = $request->company;
        $team->facebook_url = $request->facebook_url;
        $team->email_url = $request->email_url;
        $team->twitter_url = $request->twitter_url;
        $team->linkedin_url = $request->linkedin_url;
        $team->status = $request->status;
        $team->save();

        Alert::toast('Team successfully updated', 'success');

        return redirect()->route('admin.team.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if (Storage::exists($team->photo)) {
            Storage::delete($team->photo);
        }

        $team->delete();

        Alert::toast('Team successfully deleted', 'success');

        return redirect()->back();
    }
}
