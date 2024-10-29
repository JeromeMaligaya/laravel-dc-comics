<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sneakers = Sneaker::all();
        // dd($sneakers);
        return view('sneakers.index', compact("sneakers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sneakers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $sneaker = Sneaker::create($formData);

        return redirect()->route("sneaker-show", ["id" => $sneaker->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sneaker = Sneaker::findOrFail($id);
        return view('sneakers.show', compact("sneaker"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
