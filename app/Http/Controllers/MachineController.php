<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    private array $machines = [
        1 => [
            'id' => 1,
            'name' => 'Токарний верстат 1К62',
            'service' => 'Планове технічне обслуговування',
            'text' => 'Виконується перевірка вузлів, заміна мастила та огляд механізмів.'
        ],
        2 => [
            'id' => 2,
            'name' => 'Фрезерний верстат 6Р82',
            'service' => 'Діагностика та налаштування',
            'text' => 'Проводиться діагностика та налаштування механізмів, перевірка люфтів.'
        ],
        3 => [
            'id' => 3,
            'name' => 'CNC верстат Haas',
            'service' => 'Перевірка електроніки та оновлення ПЗ',
            'text' => 'Перевіряються електронні компоненти, оновлюється програмне забезпечення.'
        ],
    ];

    public function index()
    {
        return view('machines', ['machines' => $this->machines]);
    }

    public function show($id)
    {
        if (!isset($this->machines[$id])) {
            abort(404);
        }

        return view('machine', ['machine' => $this->machines[$id]]);
    }
}