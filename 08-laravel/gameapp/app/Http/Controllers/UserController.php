<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(20);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = $request->file('photo')->getClientOriginalName();

            // Define la ruta de destino
            $destinationPath = public_path('images');

            // Mueve el archivo a la ruta de destino
            $photo->move($destinationPath, $photoName);
        } else {
            $photoName = 'default.jpg';
        }
        $user = new User();
        $user->document = $request->document;
        $user->fullname = $request->fullname;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->photo = $photoName;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return redirect('users')->with('message', 'Usuario ' . $user->fullname . ' creado con éxito');
        }

        // Add a return statement here
        return redirect('users')->with('message', 'Error al crear el usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)

    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = $request->file('photo')->getClientOriginalName();

            // Define la ruta de destino
            $destinationPath = public_path('images');

            // Mueve el archivo a la ruta de destino
            $photo->move($destinationPath, $photoName);
        }
        $user->document = $request->document;
        $user->fullname = $request->fullname;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->photo = $photoName;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            return redirect('users')->with('message', 'Usuario ' . $user->fullname . ' actualizado con éxito');
        }

        // Add a return statement here
        return redirect('users')->with('message', 'Error al actializar el usuario');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            return redirect('users')->with('message', 'Usuario ' . $user->fullname . ' eliminado con éxito');
        }

        // Add a return statement here
        return redirect('users')->with('message', 'Error al eliminar el usuario');
    }
    public function search(Request $request)
    {
        $users = User::names($request->q)->get();
        return view('users.search')->with('users', $users);
    }
    public function pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('users.pdf', compact('users'));
        return $pdf->setPaper('a4', 'landscape')->download('allusers.pdf');
    }

    public function excel()
    {
        return Excel::download(new UserExport, 'allusers.xlsx');
    }
}
