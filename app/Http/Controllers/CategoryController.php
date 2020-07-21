<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('categories.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name_cat.required' => 'Es necesario ingresar un nombre para la categoría.',
            'name_cat.min' => 'El nombre de la categoria debe tener al menos 5 caracteres.',
            'description_cat.required' => 'La descripción de la categoria es requerido.',
            'description_cat.min' => 'La descripción de la categoria debe tener al menos 10 caracteres.',
        ];
        $rules = [
            'name_cat' => 'required|min:5',
            'description_cat' => 'required|min:10',
        ];

        $this->validate($request, $rules, $messages);

        $categories = new Category();

        $categories->name_cat = $request->input('name');
        $categories->description_cat = $request->input('description');
        $categories->save();

        return redirect('categoriesL');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::find($id);

        return view('categories.show_category')->with(compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('categories.show_category')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'name_cat.required' => 'Es necesario ingresar un nombre para la categoría.',
            'name_cat.min' => 'El nombre de la categoria debe tener al menos 5 caracteres.',
            'description_cat.required' => 'La descripción de la categoria es requerido.',
            'description_cat.min' => 'La descripción de la categoria debe tener al menos 10 caracteres.',
        ];
        $rules = [
            'name_cat' => 'required|min:5',
            'description_cat' => 'required|min:10',
        ];

        $this->validate($request, $rules, $messages);

        $categories = Category::find($id);

        $categories->name_cat = $request->input('name');
        $categories->description_cat = $request->input('description_cat');
        $categories->save();

        return redirect('/category/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/category/list');
    }
}
