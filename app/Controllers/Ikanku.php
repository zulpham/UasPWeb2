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
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Ikan',
        ];
        return view('ikanku/create', $data);
    }
    public function save()
    {
        $nama_ikan = url_title($this->request->getVar('nama_ikan'), '-', true);
        $this->ikanModel->save([
            'nama_ikan' => $this->request->getVar('nama_ikan'),
            'nama_latin' => $this->request->getVar('nama_latin'),
            'habitat' => $this->request->getVar('habitat'),
            'diet' => $this->request->getVar('diet'),
            'asal' => $this->request->getVar('asal'),
            'gambar_ikan' => $this->request->getVar('gambar_ikan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/');
    }
    public function delete($id_ikan)
    {
        $this->ikanModel->delete($id_ikan);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/');
    }
    public function edit($nama_ikan)
    {
        $data = [
            'title' => 'Form Ubah Data Ikan',
            'ikan' => $this->ikanModel->getIkan($nama_ikan)
        ];
        return view('ikanku/edit', $data);
    }
    public function update($id_ikan)
    {
        $namaLama = $this->ikanModel->getIkan($this->request->getVar('nama_ikan'));
        if($namaLama && $namaLama['nama_ikan'] == $this->request->getVar('nama_ikan')){ 
            $rule_nama_ikan = 'required';
        } else {
            $rule_nama_ikan ='required|is_unique[ikan.nama_ikan]';
        }
    $nama_ikan = url_title($this->request->getVar('nama_ikan'), '-', true);
    $this->ikanModel->save([
        'id_ikan' => $id_ikan,
        'nama_ikan' => $this->request->getVar('nama_ikan'),
        'nama_latin' => $this->request->getVar('nama_latin'),
        'habitat' => $this->request->getVar('habitat'),
        'diet' => $this->request->getVar('diet'),
        'asal' => $this->request->getVar('asal'),
    ]);
    session()->setFlashdata('pesan', 'Data berhasil diubah.');
    return redirect()->to('/');
    }
}