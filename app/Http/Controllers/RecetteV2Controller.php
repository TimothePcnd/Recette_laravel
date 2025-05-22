<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\RecetteV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetteV2Controller extends Controller
{
    public function index()
    {
        $recettesV2 = RecetteV2::all();
        return view('recetteV2.index', compact('recettesV2'));
    }

    public function create()
    {
        return view('recetteV2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        /*RecetteV2::create($request->all());*/
        DB::table('recette_V2_s')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('recetteV2.index')->with('success', 'RecettesV2 created successfully');
    }

    public function edit(RecetteV2 $recetteV2)
    {
        return view('recetteV2.edit', compact('recetteV2'));
    }

    public function update(Request $request, RecetteV2 $recetteV2)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        DB::table('recette_V2_s')
            ->where('id', $recetteV2->id)
            ->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('recetteV2.index')->with('success', 'RecetteV2 updated successfully.');
    }

    public function destroy(RecetteV2 $recetteV2)
    {
        $recetteV2->delete();
        return redirect()->route('recetteV2.index')->with('success', 'RecetteV2 deleted successfully.');
    }
}
