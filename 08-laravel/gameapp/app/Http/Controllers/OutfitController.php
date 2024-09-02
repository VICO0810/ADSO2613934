<?php

namespace App\Http\Controllers;
use App\Models\outfit;
use Illuminate\Http\Request;
use App\Http\Requests\OutfitRequest;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class OutfitController extends Controller
{
    public function index()
    {
        $outfits = outfit::all();
        return view('outfits.index')->with('outfits', $outfits);
    }
    public function create()
    {
        return view('outfits.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->file('image')->getClientOriginalName();

            // Define la ruta de destino
            $destinationPath = public_path('images');

            // Mueve el archivo a la ruta de destino
            $image->move($destinationPath, $imageName);
        } else {
            $imageName = 'default.jpg';
        }
        $outfit = new outfit();
        $outfit->name = $request->name;
        $outfit->description = $request->description;
        $outfit->user_id = $request->user_id;
        $outfit->image = $imageName;

        if ($outfit->save()) {
            return redirect('outfits')->with('message', 'Outfit ' . $outfit->fullname . ' creado con éxito');
        }

        // Add a return statement here
        return redirect('outfits')->with('message', 'Error al crear el usuario');
    }
    public function show(Outfit $outfit)
    {
        return view('outfits.show')->with('outfit', $outfit);
    }

    public function edit(Outfit $outfit)
    {
        return view('outfits.edit')->with('outfit', $outfit);
    }
    public function update(Request $request, Outfit $outfit)

    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->file('image')->getClientOriginalName();

            // Define la ruta de destino
            $destinationPath = public_path('images');

            // Mueve el archivo a la ruta de destino
            $image->move($destinationPath, $imageName);
        } else {
            $imageName = 'default.jpg';
        }
        $outfit->name = $request->name;
        $outfit->description = $request->description;
        $outfit->user_id = $request->user_id;
        $outfit->image = $imageName;

        if ($outfit->save()) {
            return redirect('outfits')->with('message', 'Outfit ' . $outfit->fullname . ' actualizado con éxito');
        }

        // Add a return statement here
        return redirect('outfits')->with('message', 'Error al crear el usuario');
    }
    public function destroy(Outfit $outfit)
    {
        if ($outfit->delete()) {
            return redirect('outfits')->with('message', 'Usuario ' . $outfit->name . ' eliminado con éxito');
        }

        // Add a return statement here
        return redirect('outfits')->with('message', 'Error al eliminar el usuario');
    }
    public function search(Request $request)
    {
        $outfits = outfit::names($request->q)->get();
        return view('outfits.search')->with('outfits', $outfits);
    }
}



