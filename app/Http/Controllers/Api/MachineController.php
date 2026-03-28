<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index()
    {
        return response()->json(Machine::all());
    }

    public function show($id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return response()->json([
                'message' => 'Елемент не знайдено'
            ], 404);
        }

        return response()->json($machine);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $machine = Machine::create($validated);

        return response()->json([
            'message' => 'Елемент успішно додано',
            'data' => $machine
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return response()->json([
                'message' => 'Елемент не знайдено'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $machine->update($validated);

        return response()->json([
            'message' => 'Елемент успішно оновлено',
            'data' => $machine
        ]);
    }

    public function destroy($id)
    {
        $machine = Machine::find($id);

        if (!$machine) {
            return response()->json([
                'message' => 'Елемент не знайдено'
            ], 404);
        }

        $machine->delete();

        return response()->json([
            'message' => 'Елемент успішно видалено'
        ]);
    }
}