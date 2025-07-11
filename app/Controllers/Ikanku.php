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
    public function kontak(): string{
        return view('ikanku/kontak');
    }
    public function detail($nama_ikan): string
    {
        $data = [
            'title' => 'Detail Ikan',
            'ikan' => $this->ikanModel->getIkan($nama_ikan)
        ];
        return view('ikanku/detail_ikan', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Ikan',
        ];
        return view('ikanku/create_ikan', $data);
    }
    public function save()
    {
        $nama_ikan = url_title($this->request->getVar('nama_ikan'), '-', true);
        $gambarIkan = $this->request->getFile('gambar_ikan');
        if ($gambarIkan->getError() == 4)
        {
            $namaGambar = "gambar_default.jpg";
        } else {
            $namaGambar = "gambar_" . $nama_ikan . ".jpg";
            $gambarIkan->move('img',$namaGambar);
        }
        $this->ikanModel->save([
            'nama_ikan' => $this->request->getVar('nama_ikan'),
            'nama_latin' => $this->request->getVar('nama_latin'),
            'habitat' => $this->request->getVar('habitat'),
            'diet' => $this->request->getVar('diet'),
            'asal' => $this->request->getVar('asal'),
            'gambar_ikan' => $namaGambar
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/');
    }
    public function delete($id_ikan)
    {
        $ikan = $this->ikanModel->find($id_ikan);
        if($ikan['gambar_ikan'] != 'gambar_default.jpg'){
            unlink('img/'. $ikan['gambar_ikan']);
        }
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
        return view('ikanku/edit_ikan', $data);
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
    $gambarIkan = $this->request->getFile('gambar_ikan');
    if ($gambarIkan->getError() == 4)
    {
        $namaGambar = $this->request->getVar('gambar_ikanLama');
    } else {
        $namaGambar = "gambar_". $nama_ikan. ".jpg";
        if($this->request->getVar('gambar_ikanLama') != 'gambar_default.jpg'){
            unlink('img/'. $this->request->getVar('gambar_ikanLama'));
            }
        $gambarIkan->move('img',$namaGambar);
    }
    $this->ikanModel->save([
        'id_ikan' => $id_ikan,
        'nama_ikan' => $this->request->getVar('nama_ikan'),
        'nama_latin' => $this->request->getVar('nama_latin'),
        'habitat' => $this->request->getVar('habitat'),
        'diet' => $this->request->getVar('diet'),
        'asal' => $this->request->getVar('asal'),
        'gambar_ikan' => $namaGambar
    ]);
    session()->setFlashdata('pesan', 'Data berhasil diubah.');
    return redirect()->to('/');
    }
}