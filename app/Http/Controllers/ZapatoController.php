<?php

namespace App\Http\Controllers;

use App\Models\Zapato;
use Illuminate\Http\Request;

/**
 * Class ZapatoController
 * @package App\Http\Controllers
 */
class ZapatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zapatos = Zapato::paginate();

        return view('zapato.index', compact('zapatos'))
            ->with('i', (request()->input('page', 1) - 1) * $zapatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zapato = new Zapato();
        return view('zapato.create', compact('zapato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        request()->validate(Zapato::$rules);

        $zapato = Zapato::create($request->all());

        return redirect()->route('zapatos.index')
            ->with('success', 'Zapato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zapato = Zapato::find($id);

        return view('zapato.show', compact('zapato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zapato = Zapato::find($id);

        return view('zapato.edit', compact('zapato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Zapato $zapato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zapato $zapato)
    {
        request()->validate(Zapato::$rules);

        $zapato->update($request->all());

        return redirect()->route('zapatos.index')
            ->with('success', 'Zapato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $zapato = Zapato::find($id)->delete();

        return redirect()->route('zapatos.index')
            ->with('success', 'Zapato deleted successfully');
    }

}
