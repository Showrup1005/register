<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use Illuminate\Http\Request;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bonus.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Salary::pluck('grade');

        return view('bonus.create', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'bonusType' => 'required',
            'rate' => 'required',
            'month' => 'required',
            'gradeNumbers' => 'required|array', // Ensures it's an array
            'gradeNumbers.*' => 'number',
        ]);

        Bonus::create([
            'name' => $request->name,
            'bonusType' => $request->bonusType,
            'rate' => $request->rate,
            'month' => $request->month,
            'gradeNumbers' => json_encode($request->gradeNumbers), 
        ]);
        return redirect()->route('category.index')->with('msg', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bonus $bonus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bonus $bonus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bonus $bonus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bonus $bonus)
    {
        //
    }
}
