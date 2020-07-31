<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reading;

class LecturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reading::all();
        // $readings = Reading::paginate(10);
        // return view('readings.list_readings')->with(compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('readings.create_readings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $messages = [
            'reading.required' => 'Es necesario ingresar un nombre para la Lectura.',
            'reading.min' => 'El nombre de la lectura debe tener al menos 6 caracteres.',
            'author.required' => 'El nombre del autor es requerido, para esta lectura',
            'author.min' => 'El nombre del autor debe tener al menos 6 caracteres.',
            'points.required' => 'El campo puntos es requerido.',
            'points.numeric' => 'Este campo debe ser numerico',
            'content.required' => 'El campo Contenido es requerido',
            'content.min' => 'El contenido de esta lectura debe tener al menos 100 carcateres'
        ];
        $rules = [
            'reading' => 'required|min:6',
            'author' => 'required|min:6',
            'points' => 'required|numeric',
            'content' => 'required|min:100'
        ];

        $this->validate($request, $rules, $messages);
        
        $reading = new Reading();
        $reading->name_lect = $request->input('reading');
        $reading->content_lect = $request->input('content');
        $reading->autor = $request->input('author');
        $reading->points = $request->input('points');
        $reading->category = $request->input('category');
        $reading->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reading = Reading::find($id);

        return view('readings.show_reading')->with(compact('reading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reading = Reading::find($id);
        return view('readings.edit_readings')->with(compact('reading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'reading.required' => 'Es necesario ingresar un nombre para la categoría.',
            'reading.min' => 'El nombre de la lectura debe tener al menos 6 caracteres.',
            'author.required' => 'El nombre del autor es requerido, para esta lectura',
            'author.min' => 'El nombre del autor debe tener al menos 6 caracteres.',
            'points.required' => 'El campo puntos es requerido.',
            'points.numeric' => 'Este campo debe ser numerico',
            'content.required' => 'El campo Contenido es requerido',
            'content.min' => 'El contenido de esta lectura debe tener al menos 100 carcateres'
        ];
        $rules = [
            'reading' => 'required|min:6',
            'author' => 'required|min:6',
            'points' => 'required|numeric',
            'content' => 'required|min:100'
        ];

        $this->validate($request, $rules, $messages);

        $reading = Reading::find($id);
        $reading->name_lect = $request->input('reading');
        $reading->content_lect = $request->input('content');
        $reading->autor = $request->input('author');
        $reading->points = $request->input('points');
        $reading->category = $request->input('category');
        $reading->save();

        return redirect('/readings/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reading = Reading::find($id);
        $reading->delete();

        return redirect('/readings/list');
    }
}
