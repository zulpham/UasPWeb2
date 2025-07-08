<?php
namespace App\Controllers;

class Ikanku extends BaseController{
    public function index(): string{
        return view('welcome_message');
    }
    public function tentangkami(): string{
        return view('tentangkami');
    }
    public function acara(): string{
        return view('acara');
    }
    public function kontak(): string{
        return view('kontak');
    }
}