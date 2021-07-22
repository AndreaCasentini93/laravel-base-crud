<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::orderBy('id', 'DESC')->paginate(6);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['slug' => Str::slug($request->title, '-')]);
        $data = $request->all();
        $request->validate(
            [
                'title' => 'required|unique:comics|max:50',
                'slug' => 'required|max:100',
                'description' => 'required',
                'thumb' => 'required|max:255',
                'price' => 'required|numeric|max:9999.99',
                'series' => 'required:max:50',
                'sale_date' => 'required|date',
                'type' => 'required|max:15'
            ],
            [
                'required' => 'Campo obbligatorio!',
                'max' => 'Hai superato il limite supportato dal campo!',
                'date' => 'Il campo accetta solo date!',
                'numeric' => 'Il campo accetta solo numeri!',
                'title.unique' => 'Il titolo è già stato utilizzato!'
            ]
        );
        $comics = new Comics();
        $comics->fill($data);
        $comics->save();
        return redirect()
            ->route('comics.show', $comics->id)
            ->with('message', 'Il fumetto è stato aggiunto correttamente alla lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comic)
    {
        return view("comics.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        $request->request->add(['slug' => Str::slug($request->title, '-')]);
        $data = $request->all();
        $request->validate(
            [
                'title' => [
                    'required',
                    'max:50',
                    Rule::unique('comics')->ignore($comic->id)
                ],
                'slug' => 'required|max:100',
                'description' => 'required',
                'thumb' => 'required|max:255',
                'price' => 'required|numeric|max:9999.99',
                'series' => 'required:max:50',
                'sale_date' => 'required|date',
                'type' => 'required|max:15'
            ],
            [
                'required' => 'Campo obbligatorio!',
                'max' => 'Hai superato il limite supportato dal campo!',
                'date' => 'Il campo accetta solo date!',
                'numeric' => 'Il campo accetta solo numeri!',
                'title.unique' => 'Il titolo è già stato utilizzato!'
            ]
        );
        $comic->update($data);
        return redirect()
            ->route('comics.show', $comic->id)
            ->with('message', 'Il fumetto è stato modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return redirect()
            ->route('comics.index')
            ->with('delete', 'Il fumetto è stato cancellato correttamente');
    }
}
