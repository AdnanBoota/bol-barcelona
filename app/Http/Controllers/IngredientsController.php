<?php

namespace App\Http\Controllers;

use App\Ingredients;
use Illuminate\Http\Request;

class IngredientsController extends Controller
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
        $data['records'] = Ingredients::all();
//        dd($bowls);
        return view('admin/ingredients/ingredients', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Array();
        $data['specsValues'] = specsList();
    //    dd($data);
        return view('admin/ingredients/create-ingredient', $data);
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
        Ingredients::create($data);
        return redirect('admin/ingredients');
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
        $data['specsValues'] = specsList();
        $data['record'] = Ingredients::find($id);
//        dd(json_decode($data['record']->specs));
        return view('admin/ingredients/create-ingredient', $data);
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
        $record = Ingredients::find($id);
//        dd($record);
        $record->update($data);

        return redirect('admin/ingredients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ingredients::destroy($id);
        return redirect('admin/ingredients');
    }
}
