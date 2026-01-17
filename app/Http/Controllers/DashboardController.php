<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                'label' => 'Dashboard',
                'icon' => 'bi bi-house',
                'route' => 'dashboard',
            ],
        ];

        return view('dashboard', compact('menuItems'));
    }
}
