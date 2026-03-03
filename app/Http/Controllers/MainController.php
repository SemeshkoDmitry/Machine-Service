<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "
        <html>
        <head>
            <title>Сервіс ремонту верстатів</title>
        </head>
        <body>
            <h1>Сервіс технічного обслуговування та ремонту верстатів</h1>
            
            <p>Ми спеціалізуємось на професійному обслуговуванні промислових верстатів.</p>
            <p>Надаємо послуги діагностики, планового технічного обслуговування та ремонту.</p>

            <hr>

            <a href='/machines'>Каталог обладнання</a><br><br>
            <a href='/about'>Про компанію</a>
        </body>
        </html>
        ";
    }

    public function about()
    {
        return "
        <html>
        <head>
            <title>Про компанію</title>
        </head>
        <body>
            <h1>Про компанію</h1>

            <p>Наша компанія займається сервісним обслуговуванням та ремонтом 
            промислового обладнання різної складності.</p>

            <p>Ми працюємо з токарними, фрезерними та CNC верстатами.</p>

            <hr>

            <a href='/'>На головну</a>
        </body>
        </html>
        ";
    }
}