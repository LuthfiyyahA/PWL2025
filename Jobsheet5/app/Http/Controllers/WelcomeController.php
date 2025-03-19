<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}