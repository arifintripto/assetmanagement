<?php

namespace App\Http\Controllers;

use App\Models\Sim;
use Illuminate\Http\Request;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sims = Sim::where('is_active','=',1)->get();
        return view('dashboard.pages.sim.index', compact('sims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {

//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sim::create(\request()->validate([
            'number' => 'required|min:11|max:11',
            'serial_no' => 'required|max:20',
            'pin1' => 'required|min:4|max:4',
            'pin2' => 'required|min:4|max:4',
            'puk1' => 'required|min:4|max:8',
            'puk2' => 'required|min:4|max:8',
        ]));
        return redirect(route('sim.index'))->with('message', 'New SIM Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Sim $sim
     * @return \Illuminate\Http\Response
     */
    public function show(Sim $sim)
    {
        return view('dashboard.pages.sim.show', compact('sim'));
    }

    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Sim $sim
     * @return \Illuminate\Http\Response
     */
    public function edit(Sim $sim)
    {
        return view('dashboard.pages.sim.edit', compact('sim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sim $sim
     * @return \Illuminate\Http\Response
     */
    public function update(Sim $sim)
    {
        \request()->validate([
            'number' => 'required|min:11|max:11',
            'serial_no' => 'required|max:20',
            'pin1' => 'required|min:4|max:4',
            'pin2' => 'required|min:4|max:4',
            'puk1' => 'required|min:4|max:8',
            'puk2' => 'required|min:4|max:8',
        ]);

        $sim->number = \request('number');
        $sim->serial_no = \request('serial_no');
        $sim->pin1 = \request('pin1');
        $sim->pin2 = \request('pin2');
        $sim->puk1 = \request('puk1');
        $sim->puk2 = \request('puk2');
        $sim->save();

        return redirect(route('sim.edit', $sim))->with('message', 'SIM Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Sim $sim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sim $sim)
    {
        $sim->is_active = 0;
        $sim->save();

        return redirect('sim')->with('deletedSimMsg', 'SIM Deleted Successfully!');
    }
}
