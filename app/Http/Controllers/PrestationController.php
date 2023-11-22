<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class PrestationController extends Controller
{
    public function index()
    {
        return view('prestations/index', [
            'prestations' => Prestation::all(),
        ]);
        
    }

    public function show($id)
    {
        $prestation = Prestation::find($id);

        return view('prestations/show', [
            'prestation' => $prestation,
        ]);
    }
    
    public function create()
    {
        return view('prestations/create', [
            'prestation' => Prestation::all(),
        ]);
            
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'details'=> '',
            'price'=> 'required|integer',
            'time'=> 'required|integer',
            
        ]);

        $prestation = new Prestation();
        $prestation->name = $request->name;
        $prestation->details = $request->details;
        $prestation->price = $request->price;
        $prestation->time = $request->time;

        $prestation->save();
        

        return redirect('/prestations');
    }

    public function edit($id)
    {
        $prestation = Prestation::findOrFail($id);
        // Gate::allowIf($movie->user_id == Auth::user()->id);

        return view('prestations/edit', [
            'prestation' => $prestation,
        ]);
    }
           
    public function update(Request $request, $id)
    {
        $prestation = Prestation::findOrFail($id);

        $request->validate([
            'name'=> 'required',
            'details'=> 'required',
            'price'=> 'required|integer',
            'time'=> 'required|integer',
            
        ]);

        
        $prestation->name = $request->name;
        $prestation->details = $request->details;
        $prestation->price = $request->price;
        $prestation->time = $request->time;
        $prestation->save();
        
        return redirect('/prestations');
    }

    public function destroy($id) {

        $prestation = Prestation::findOrFail($id);
        // Gate::allowIf($prestation->user_id == Auth::user()->id);
        
        Prestation::destroy($id);
        return redirect('/prestations');
    }
}
