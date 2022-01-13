<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\TechSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TechSuppController extends Controller
{
    public function techSupports() {
        $techs = TechSupport::all();
        return view('techSupports.techSupport', compact('techs'));
    }
    public function techCreate() {
        return view('techSupports.techCreate');
    }
    public function techShow(TechSupport $tech) {
        return view('techSupports.techShow', compact('tech'));
    }
    public function techStore() {
        $data = request()->validate([
            'type_tech_supp' => 'required|min:3',
            'date_tech_supp' => 'required',
            'km_auto' => 'required',
        ]);
        TechSupport::create($data);
        return redirect()->route('techSupports');
    }
    public function techEdit(TechSupport $tech) {
        if(! Gate::allows('tech_update', $tech)) {
            return response('You cannot update, not your profile!', 483);
        }
        return view('autos.techEdit',compact('tech'));
    }
    public function techUpdate(TechSupport $tech) {
        if(! Gate::allows('tech_update', $tech)) {
            return response('You cannot update, not your profile!', 483);
        }
        $valid = request()->validate( [
            'type_tech_supp' => 'required|min:3',
            'date_tech_supp' => 'required',
            'km_auto' => 'required',
        ]);
        $tech->update($valid);
        return redirect()->route('techs');
    }
    public function techDestroy(TechSupport $tech) {
        if(! Gate::allows('tech_update', $tech)) {
            return response('You cannot delete, not your profile', 483);
        }
        $tech->delete();
        return redirect()->route('techs');
    }
}
