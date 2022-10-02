<?php

namespace App\Http\Controllers;

use App\Models\Ayuda;
use Illuminate\Http\Request;

/**
 * Class AyudaController
 * @package App\Http\Controllers
 */
class AyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayudas = Ayuda::paginate();

        return view('ayuda.index', compact('ayudas'))
            ->with('i', (request()->input('page', 1) - 1) * $ayudas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ayuda = new Ayuda();
        return view('ayuda.create', compact('ayuda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ayuda::$rules);

        $ayuda = Ayuda::create($request->all());

        return redirect()->route('ayudas.index')
            ->with('success', 'Ayuda created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ayuda = Ayuda::find($id);

        return view('ayuda.show', compact('ayuda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ayuda = Ayuda::find($id);

        return view('ayuda.edit', compact('ayuda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ayuda $ayuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ayuda $ayuda)
    {
        request()->validate(Ayuda::$rules);

        $ayuda->update($request->all());

        return redirect()->route('ayudas.index')
            ->with('success', 'Ayuda updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ayuda = Ayuda::find($id)->delete();

        return redirect()->route('ayudas.index')
            ->with('success', 'Ayuda deleted successfully');
    }
}
