<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sim;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sims = Sim::where('is_assigned','=',0)
            ->orderBy('number', 'asc')
            ->get();
        $items = Item::where('is_active','=',1)->get();
        return view('dashboard.pages.item.index', compact('items', 'sims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::create(\request()->validate([
            'name' => 'required|max:100|string',
            'model' => 'required|max:100|string',
            'description' => '',
            'identification_no' => 'required|max:100|string',
            'sim' => 'required',
            'cost' => 'required',
            'purchase_date' => '',
        ]));
        $sim = Sim::where('id','=',\request('sim'))->first();
        $sim->is_assigned = 1;
        $sim->assigned_to = \request('identification_no');
        $sim->update();
        return redirect(route('item.index'))->with('message', 'New Item Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $sims = Sim::where('is_assigned','=',0)
            ->orderBy('number', 'asc')
            ->get();
        return view('dashboard.pages.item.edit', compact('item', 'sims'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        \request()->validate([
            'name' => 'required|max:100|string',
            'model' => 'required|max:100|string',
            'description' => '',
            'identification_no' => 'required|max:100|string',
            'sim' => 'required',
            'cost' => 'required',
            'purchase_date' => '',
        ]);
        $item_old_sim = $item->sim;

        $item->name = \request('name');
        $item->model = \request('model');
        $item->description = \request('description');
        $item->identification_no = \request('identification_no');
        $item->sim = \request('sim');
        $item->cost = \request('cost');
        $item->purchase_date = \request('purchase_date');
        $item->save();

        $sim = Sim::where('id','=',$item_old_sim)->first();
        $sim->is_assigned = 0;
        $sim->assigned_to = null;
        $sim->update();

        $sim = Sim::where('id','=',\request('sim'))->first();
        $sim->is_assigned = 1;
        $sim->assigned_to = \request('identification_no');
        $sim->update();

        return redirect(route('item.edit', $item))->with('message', 'Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->is_active = 0;
        $item->sim()->is_assigned = 0;
        $item->sim()->assigned_to = null;
        $item->save();

        return redirect('item')->with('deletedItemMsg', 'Item Deleted Successfully!');
    }
}
