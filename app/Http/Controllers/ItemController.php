<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // get
    public function index()
    {
        $items = Item::with('box')->orderBy('created_at')->paginate(10);
        $message = 'test msg';
        return view('items.index', ['items' => $items, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // get at /items/create
    // (for example for a create form)
    public function create()
    {
        //
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
    //
    // get at /items/{id} !!!
    // (so nice!!!!!!)
    public function show(string $id)
    {
        //
        $item = Item::find($id);
        return view('items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
