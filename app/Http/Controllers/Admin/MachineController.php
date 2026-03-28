<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index()
    {
        $machines = Machine::all();
        return view('admin.machines.index', compact('machines'));
    }

    public function create()
    {
        return view('admin.machines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'description' => 'required|string',
        ], [
            'name.required' => 'Поле "Назва" є обов’язковим.',
            'service.required' => 'Поле "Послуга" є обов’язковим.',
            'description.required' => 'Поле "Опис" є обов’язковим.',
        ]);

        Machine::create($validated);

        return redirect()->route('admin.machines.index')
            ->with('success', 'Новий елемент успішно додано.');
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