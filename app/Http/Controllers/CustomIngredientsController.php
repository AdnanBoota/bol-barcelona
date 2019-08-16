<?php

namespace App\Http\Controllers;

use App\CustomIngredients;
use Illuminate\Http\Request;

class CustomIngredientsController extends Controller
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
        $data['records'] = CustomIngredients::all();
    //    dd($data);
        return view('admin/custom-ingredients/custom-ingredients', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Array();
        $data['ingredValues'] = customIngredientCategory();
    //    dd($data);
        return view('admin/custom-ingredients/create-custom-ingredient', $data);
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
//        dd($data);
        CustomIngredients::create($data);
        return redirect('admin/custom-ingredients');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomIngredients $customIngredients
     * @return \Illuminate\Http\Response
     */
    public function show(CustomIngredients $customIngredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomIngredients $customIngredients
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomIngredients $customIngredients, $id)
    {
//        dd($customIngredients->find($id));
        $data = Array();
        $data['record'] = $customIngredients->find($id);
        $data['ingredValues'] = customIngredientCategory();
//        dd($data['record']);
//        dd(json_decode($data['record']->specs));
        return view('admin/custom-ingredients/create-custom-ingredient', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\CustomIngredients $customIngredients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomIngredients $customIngredients, $id)
    {
        $data = $request->all();
//        dd($data);
        $record = $customIngredients->find($id);
//        dd($record);
        $record->update($data);

        return redirect('admin/custom-ingredients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomIngredients $customIngredients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomIngredients::destroy($id);
        return redirect('admin/custom-ingredients');
    }
}
