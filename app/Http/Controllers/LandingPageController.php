<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

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

        /*
        * Отображаем страничку, но при этом передаём ей значения переменной $services.
        */
        return
            view('layouts\landingPage')
                ->with('services', $services);
    }
}
