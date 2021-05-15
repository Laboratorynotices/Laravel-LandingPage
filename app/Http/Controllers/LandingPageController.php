<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\AboutBlock;
use App\Models\Amenity;
use App\Models\Portfolio;
use App\Models\Employee;
use App\Models\Testimonial;

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

        // Считываем все данные из таблицы "Amenity".
        $amenities = Amenity::all();

        // Считываем все данные из таблицы "Portfolio".
        $portfolios = Portfolio::all();

        // Считываем все данные из таблицы "Employee".
        $employees = Employee::all();

        // Считываем все данные из таблицы "Testimonial".
        $testimonials = Testimonial::all();

        /*
        * Отображаем страничку,
        * и при этом передаём ей значения переменных.
        */
        return
            view('layouts\landingPage')
                ->with('services', $services)
                ->with('about', $about)
                ->with('amenities', $amenities)
                ->with('portfolios', $portfolios)
                ->with('employees', $employees)
                ->with('testimonials', $testimonials);
    }
}
