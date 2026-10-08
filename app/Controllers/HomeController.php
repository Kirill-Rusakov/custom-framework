<?php

namespace App\Controllers;

class HomeController
{
    public function index() {
        return view('test', ['name' => 'Alex', 'age' => 35, 'is_developer' => true]);
        // app() -> view -> render('test', ['name' => 'Alex', 'age' => 35, 'is_developer' => true]);
        return 'Test Page';
    }

    public function contact() {
        return 'Contact Page';
    }
}