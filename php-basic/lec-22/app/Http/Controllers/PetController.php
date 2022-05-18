<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Http\Requests\Pets\Index;
use App\Http\Requests\Pets\Show;
use App\Http\Requests\Pets\Create;
use App\Http\Requests\Pets\Store;
use App\Http\Requests\Pets\Edit;
use App\Http\Requests\Pets\Update;
use App\Http\Requests\Pets\Destroy;


/**
 * Description of PetController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class PetController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.pets.index', ['records' => Pet::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Pet $pet)
    {
        return view('pages.pets.show', [
                'record' =>$pet,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.pets.create', [
            'model' => new Pet,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Pet;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Pet saved successfully');
            return redirect()->route('pets.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Pet');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Pet $pet)
    {

        return view('pages.pets.edit', [
            'model' => $pet,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Pet $pet)
    {
        $pet->fill($request->all());

        if ($pet->save()) {
            
            session()->flash('app_message', 'Pet successfully updated');
            return redirect()->route('pets.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Pet');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Pet  $pet
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Pet $pet)
    {
        if ($pet->delete()) {
                session()->flash('app_message', 'Pet successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Pet');
            }

        return redirect()->back();
    }
}
