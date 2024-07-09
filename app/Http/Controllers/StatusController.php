<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $statuses = Status::all();
        return view('staf.status.index', compact('statuses', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('staf.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_status' => 'required|string|max:6',
            'status' => 'required|string|max:50',
            'keterangan' => 'required|string|max:255',
        ]);

        Status::create([
            'id_status' => $request->id_status,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('staf.status.index')->with('success', 'Status berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_status)
    {
        $status = Status::findOrFail($id_status);
        return view('staf.status.edit', compact('status'));
    }

    public function update(Request $request, $id_status)
    {
        $request->validate([
            'id_status' => 'required|string|max:6',
            'status' => 'required|string|max:50',
            'keterangan' => 'required|string|max:255',
        ]);

        $status = Status::findOrFail($id_status);
        $status->update([
            'id_status' => $request->id_status,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('staf.status.index')->with('success', 'Status berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
