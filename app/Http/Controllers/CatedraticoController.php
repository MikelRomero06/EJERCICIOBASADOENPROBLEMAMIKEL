<?php

namespace App\Http\Controllers;

use App\Models\catedratico;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CatedraticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Catedratico/Index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Catedratico/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(catedratico $catedratico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catedratico $id)
    {
        return Inertia::render('Catedratico/Edit', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, catedratico $catedratico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catedratico $catedratico)
    {
        //
    }
}
