<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentStoreRequest;
use App\Models\Category;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('admin.equipments.index', compact('equipments'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.equipments.create', compact('categories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentStoreRequest $request)
    {
        $image = $request->file('image')->store('public/equipments');

        $equipment = Equipment::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        if($request->has('categories')){
            $equipment->categories()->attach($request->categories);
        }

        return to_route('admin.equipments.index')->with('success','Oprema kreirana!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        $categories = Category::all();
        return view('admin.equipments.edit',compact('equipment','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name'=>'required',
            'description' => 'required'
        ]);
        $image = $equipment->image;
        if($request->hasFile('image')){
            Storage::delete($equipment->image);
            $image = $request->file('image')->store('public/equipments');

        }

        $equipment->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        if($request->has('categories')){
            $equipment->categories()->sync($request->categories);
        }
        return to_route('admin.equipments.index')->with('success','Oprema promijenjena!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        Storage::delete($equipment->image);
        $equipment->categories()->detach();
        $equipment->delete();
        return to_route('admin.equipments.index')->with('danger','Oprema izbrisana!');
    }
}
