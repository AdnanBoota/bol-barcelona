<?php

namespace App\Http\Controllers;

use App\Bowls;
use App\BowlsIngredients;
use App\Ingredients;
use Illuminate\Http\Request;

class BowlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Array();
//        dd(typesList());
        $data['records'] = Bowls::all();
//        dd($bowls);
        return view('admin/bowls/bowls', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Array();
        $data['listValues'] = typesList();
        $data['specsValues'] = specsList();
        $data['ingredients'] = Ingredients::pluck('name', 'id');
//        dd($data);
        return view('admin/bowls/create-bowl', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
//        unset($data['_token']);
        $data['specs'] = json_encode($request->specs);
//        dd($data);
//        $data['type']
        $bowl = Bowls::create($data);
        $bowl->ingredients()->attach($data['ingredients']);
        return redirect('admin/bowls');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Array();
        $data['listValues'] = typesList();
        $data['specsValues'] = specsList();
        $data['record'] = Bowls::with('ingredients')->find($id);
        $data['ingredients'] = Ingredients::pluck('name', 'id');
//        dd($data['record']->ingredients->pluck('id'));
        return view('admin/bowls/create-bowl', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

//        unset($data['_token']);
        $data['specs'] = json_encode($request->specs);
//        dd($data);
        $record = Bowls::find($id);

//        dd($record);
        $record->update($data);
        $record->ingredients()->sync($data['ingredients']);


        return redirect('admin/bowls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        Bowls::destroy($id);
        return redirect('admin/bowls');
    }
}
