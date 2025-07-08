<?php
namespace App\Controllers;

class Ikanku extends BaseController{
    public function index(): string{
        return view('ikanku/index');
    }
    public function tentangkami(): string{
        return view('ikanku/tentangkami');
    }
    public function acara(): string{
        return view('ikanku/acara');
    }
    public function kontak(): string{
        return view('ikanku/kontak');
    }
}