<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSneakerRequest;
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
    public function store(StoreSneakerRequest $request)
    {
        $formData = $request->validated();

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
        $sneaker = Sneaker::findOrFail($id);
        return view('sneakers.edit', compact("sneaker"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSneakerRequest $request, string $id)
    {
        $formData = $request->validated();

        $sneaker = Sneaker::findOrFail($id);

        $sneaker->update($formData);

        return redirect()->route("sneaker-show", ["id" => $sneaker->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sneaker = Sneaker::findOrFail($id);
        $sneaker->delete();
        return redirect()->route("sneaker-index");
    }

    public function deletedIndex()
    {
        $sneakers = Sneaker::onlyTrashed()->get();
        return view("sneakers.deleted-index", compact("sneakers"));
    }

    public function restore(string $id)
    {
        $sneaker = Sneaker::onlyTrashed()->findOrFail($id);
        $sneaker->restore();
        return redirect()->route("sneaker-index");
    }
}
