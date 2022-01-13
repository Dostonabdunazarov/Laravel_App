<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Auto;
use Illuminate\Support\Facades\Auth;

class AutoController extends Controller
{
    public function index() {
        $autos = Auto::all();
        return view('autos.index', compact('autos'));
    }
    public function create() {
        return view('autos.create');
    }
    public function show(Auto $auto) {
        return view('autos.show', compact('auto'));
    }
    public function store() {
        $data = request()->validate([
            'photo_auto' => 'required',
            'mark_auto' => 'required|min:3',
            'model_auto' => 'required',
            'date_auto' => 'required',
            'km_auto' => 'required',
            'color' => 'required',
        ]);
        Auto::create($data);
        return redirect('/');
    }
    public function edit(Auto $auto) {
        if(! Gate::allows('auto_update', $auto)) {
            return response('You cannot update, not your profile!', 483);
        }
        return view('autos.edit',compact('auto'));
    }
    public function update(Auto $auto) {
        if(! Gate::allows('auto_update', $auto)) {
            return response('You cannot update, not your profile!', 483);
        }
        $valid = request()->validate([
            'photo_auto' => 'required',
            'mark_auto' => 'required|min:3',
            'model_auto' => 'required',
            'date_auto' => 'required',
            'km_auto' => 'required',
            'color' => 'required',
        ]);
        $auto->update($valid);
        return redirect()->route('autos');
    }
    public function destroy(Auto $auto) {
        if(! Gate::allows('auto_update', $auto)) {
            return response('You cannot delete, not your profile', 483);
        }
        $auto->delete();
        return redirect()->route('autos');
    }
    public function about() {
        return view('autos.about');
    }
}
