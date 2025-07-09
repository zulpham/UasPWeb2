<?php
namespace App\Controllers;

class Ikanku extends BaseController{
    protected $ikanModel;
    public function __construct(){
        $this->ikanModel = new \App\Models\IkanModel();
    }
    public function index(): string{
        $ikan = $this->ikanModel->findAll();
        $data = [
            'title' => 'Ikanku | Home',
            'ikan' => $this->ikanModel->getIkan()
        ];
        return view('ikanku/index', $data);
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
    public function detail($nama_ikan): string
    {
        $data = [
            'title' => 'Detail Ikan',
            'ikan' => $this->ikanModel->getIkan($nama_ikan)
        ];
        return view('ikanku/detail', $data);
    }
}