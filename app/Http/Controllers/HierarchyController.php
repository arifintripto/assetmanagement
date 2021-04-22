<?php

namespace App\Http\Controllers;

use App\Models\Hierarchy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class
HierarchyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hierarchies = Hierarchy::all();
        return view('dashboard.pages.hierarchy.index', compact('hierarchies'));
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
        $request->validate([
            'file' => 'required|mimes:csv'
        ]);

        $file = file($request->file->getRealPath());
        $data = array_slice($file, 1);

        $parts = (array_chunk($data, 50));

        if (!File::isDirectory(base_path().'/resources/csv/rm_tso_csv')){
            $create_csv_folder = File::makeDirectory(base_path().'/resources/csv');
            $create_rm_tso_csv_folder = File::makeDirectory(base_path().'/resources/csv/rm_tso_csv');
        }

        foreach ($parts as $index=>$part){
            $fileName = resource_path('csv/rm_tso_csv/'.date('y-m-d-').$index.'.csv');
            file_put_contents($fileName, $part);
        }

        //IMPRTING TO DATABASE START
        //IMPRTING TO DATABASE START
        $csv_path = resource_path('csv/rm_tso_csv/*.csv');
        $csv_g = glob($csv_path);

        $reset_db = DB::delete('delete from hierarchies');

        foreach (array_slice($csv_g, 0) as $csv_file) {
            $csv_data = array_map('str_getcsv', file($csv_file));

            foreach ($csv_data as $csv_row) {

                Hierarchy::create([
                    'code' => $csv_row[0],
                    'parent_code' => $csv_row[1],
                    'name' => $csv_row[2],
                    'area' => $csv_row[3]
                ]);
            }

            $delete_csv_file = File::delete($csv_file);
        }
        $delete_rm_tso_csv_folder = File::deleteDirectory(base_path().'/resources/csv/rm_tso_csv');
        $delete_csv_folder = File::deleteDirectory(base_path().'/resources/csv');

        //IMPRTING TO DATABASE END
        //IMPRTING TO DATABASE END


        return redirect('hierarchy')->with('message', 'Uploaded CSV to Database Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hierarchy  $hierarchy
     * @return \Illuminate\Http\Response
     */
//    public function show(Hierarchy $hierarchy)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hierarchy  $hierarchy
     * @return \Illuminate\Http\Response
     */
//    public function edit(Hierarchy $hierarchy)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hierarchy  $hierarchy
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Hierarchy $hierarchy)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hierarchy  $hierarchy
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Hierarchy $hierarchy)
//    {
//        //
//    }
}
