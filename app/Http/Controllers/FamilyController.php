<?php

namespace App\Http\Controllers;

use App\Http\Requests\Familyrequest;
use App\Models\Family;
use App\Models\Orphans;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }
        $user = auth()->user();
        $families = Family::all();

        return view("family.index", ['families' => $families, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }

        return view('family.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }
        
        $family =  auth()->user()->family()->create($request->validate([
            "governorate" => 'required | string',
            "survay_date" => 'required | date',
            "deceased_name" => 'required | string',
            "birth_date" => 'required | date',
            "academic_achievement" => 'required | string',
            "profession" => 'required | string',
            "death_date" => 'required | date',
            "death_status" => 'required | string',
            "current_residence" => 'required | string',
            "phone_number" => 'required | string',
            "widowed_name" => 'required | string',
            "widowed_burth_date" => 'required | date',
            "widowed_academic_achievement" => 'required | string',
            "widowed_profession" => 'required | string',
            "deceased_salary" => 'required | string',
            "deceased_salary_value" => 'required | string',
            "mony_sources" => 'required | string',
            "sources_type" => 'required | string',
            "mony_value" => 'required | string',
            "family_assistance" => 'required | string',
            "entity_name" => 'required | string',
            "assistance_value" => 'required | string',
            "family_house" => 'required | string',
            "rent_value" => 'required | string',
            "renter_name" => 'required | string',
            "living_status" => 'required | string',
            "wife_living_with" => 'required |',
            "family_patient" => 'required | string',
            "patient_name" => 'required | string',
            "disease_type" => 'required | string',
            "families_in_house" => 'required | string',
            "orphans_family_count" => 'required | string',
            "sponsored_orphans_count" => 'required | string',
            "orphans_type" => 'required | string',
        ]));

        $orphansCount = $request->orphans_count;

        return redirect()->route('orphans.create', [$orphansCount, $family]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Family $family)
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }

        $orphans = Orphans::where('family_id', $family->id)->orderBy('id', 'desc')->get();

        return view('family.show', ['family' => $family, 'orphans' => $orphans]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Family $family)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Family $family)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Family $family)
    {
        //
    }
}
