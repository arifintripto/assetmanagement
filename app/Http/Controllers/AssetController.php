<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Item;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::where('asset_id','=',null)->get();
        $assets = Asset::where('is_active','=',1)->get();
        return view('dashboard.pages.asset.index', compact('items', 'assets'));
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
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
