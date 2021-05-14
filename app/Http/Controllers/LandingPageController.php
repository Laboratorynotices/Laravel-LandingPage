<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\AboutBlock;

class LandingPageController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function view()
    {
        // Считываем все данные из таблицы "Сервисы".
        $services = Service::all();

        // Считываем все данные из таблицы "AboutBlock".
        $about = AboutBlock::all();

        /*
        * Отображаем страничку,
        * и при этом передаём ей значения переменных.
        */
        return
            view('layouts\landingPage')
                ->with('services', $services)
                ->with('about', $about);
    }
}
