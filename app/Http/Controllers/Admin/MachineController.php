<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Machine;

class MachineController extends Controller
{
    public function index()
    {
        $machines = Machine::all();
        return view('admin.machines.index', compact('machines'));
    }

    public function show(Machine $machine)
    {
        return view('admin.machines.show', compact('machine'));
    }

    public function destroy(Machine $machine)
    {
        $machine->delete();

        return redirect()->route('admin.machines.index')
            ->with('success', 'Елемент успішно видалено.');
    }
}