<?php

namespace App\Http\Controllers;

use App\Exports\CitizenExport;
use App\Http\Requests\CitizenStoreRequest;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class CitizenController extends Controller
{
    public function index(){
        return Inertia::render('FormPage');
    }

    public function store(CitizenStoreRequest $request){
        Citizen::create($request->all());
        return to_route('welcomePage');
    }

    public function export(){
        return Excel::download(new CitizenExport(), 'data.xlsx');
    }

    public function destroy($nik){
        $citizen = Citizen::where('nik', $nik)->firstOrFail();
        $citizen->delete();

        return to_route('dashboard');
    }
}
