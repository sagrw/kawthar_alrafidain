<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Orphans;
use Illuminate\Http\Request;

class OrphansController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $orphansCount, Family $family)
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }

        return view('orphans.create', ['orphansCount' => $orphansCount, 'family' => $family]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $orphansCount, Family $family)
    {
        if (!auth()->user()) {
            return redirect()->route('login.create')->with("error", "يجب تسجيل الدخول اولا");
        }
        
        for ($i = 1; $i <= $orphansCount; $i++) {
            $data = $request->validate([
                "orphans_name_$i" => 'required|string',
                "birth_date_$i" => 'required|date',
                "academic_achievement_$i" => 'required|string',
                "hobbies_$i" => 'required|string',
                "guarantor_name_$i" => 'required|string',
                "mediator_$i" => 'required|string',
                "bail_amount_$i" => 'required|string',
                "notes_$i" => 'required|string'
            ]);

            $family->Orphans()->create([
                'name' => $data["orphans_name_$i"],
                'birth_date' => $data["birth_date_$i"],
                'academic_achievement' => $data["academic_achievement_$i"],
                'hobbies' => $data["hobbies_$i"],
                'guarantor_name' => $data["guarantor_name_$i"],
                'mediator' => $data["mediator_$i"],
                'bail_amount' => $data["bail_amount_$i"],
                'notes' => $data["notes_$i"]
            ]);
        }

        return redirect()->route('families.index')->with('success', 'تم إضافة الأيتام بنجاح.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Orphans $orphans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orphans $orphans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orphans $orphans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orphans $orphans)
    {
        //
    }
}
