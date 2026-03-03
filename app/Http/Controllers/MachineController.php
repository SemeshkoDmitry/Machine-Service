<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index()
    {
        return "
        <html>
        <head>
            <title>Каталог обладнання</title>
        </head>
        <body>
            <h1>Каталог обладнання</h1>

            <p>1. Токарний верстат 1К62 — планове технічне обслуговування.</p>
            <p>2. Фрезерний верстат 6Р82 — діагностика та налаштування.</p>
            <p>3. CNC верстат Haas — перевірка електроніки та оновлення програмного забезпечення.</p>

            <hr>

            <a href='/machines/1'>Детальніше про верстат 1</a><br>
            <a href='/machines/2'>Детальніше про верстат 2</a><br>
            <a href='/machines/3'>Детальніше про верстат 3</a><br><br>

            <a href='/'>На головну</a>
        </body>
        </html>
        ";
    }

    public function show($id)
    {
        if ($id == 1) {
            return "
            <html>
            <body>
                <h1>Токарний верстат 1К62</h1>
                <p>Виконується планове технічне обслуговування та перевірка вузлів.</p>
                <a href='/machines'>Назад до каталогу</a>
            </body>
            </html>
            ";
        }

        if ($id == 2) {
            return "
            <html>
            <body>
                <h1>Фрезерний верстат 6Р82</h1>
                <p>Проводиться діагностика та налаштування механізмів.</p>
                <a href='/machines'>Назад до каталогу</a>
            </body>
            </html>
            ";
        }

        if ($id == 3) {
            return "
            <html>
            <body>
                <h1>CNC верстат Haas</h1>
                <p>Виконується перевірка електронних компонентів та оновлення ПЗ.</p>
                <a href='/machines'>Назад до каталогу</a>
            </body>
            </html>
            ";
        }

        return "
        <html>
        <body>
            <h2>Обладнання не знайдено</h2>
            <a href='/machines'>Назад до каталогу</a>
        </body>
        </html>
        ";
    }
}