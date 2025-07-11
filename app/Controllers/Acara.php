<?php
namespace App\Controllers;

class Acara extends BaseController{
    protected $ikanModel;
    protected $acaraModel;
    public function __construct(){
        $this->ikanModel = new \App\Models\IkanModel();
        $this->acaraModel = new \App\Models\AcaraModel();
    }
    public function index_acara(): string{
        $acara = $this->acaraModel->findAll();
        $data = [
            'title' => 'Acara',
            'acara' => $this->acaraModel->getAcara()
        ];
        return view('acara/index_acara', $data);
    }
    public function detail_acara($nama_acara): string
    {
        $data = [
            'title' => 'Detail Acara',
            'acara' => $this->acaraModel->getAcara($nama_acara)
        ];
        return view('acara/detail_acara', $data);
    }
    public function create_acara(): string
    {
        $data = [
            'title' => 'Form Tambah Data Acara',
        ];
        return view('acara/create_acara', $data);
    }
    public function save_acara()
    {
        $nama_acara = url_title($this->request->getVar('nama_acara'), '-', true);
        $gambarAcara = $this->request->getFile('gambar_acara');
        if ($gambarAcara->getError() == 4)
        {
            $namaGambar = "gambar_acara_default.jpg";
        } else {
            $namaGambar = "gambar_acara_" . $nama_acara . ".jpg";
            $gambarAcara->move('img',$namaGambar);
        }
        $this->acaraModel->save([
            'nama_acara' => $this->request->getVar('nama_acara'),
            'audiens' => $this->request->getVar('audiens'),
            'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
            'tanggal_berakhir' => $this->request->getVar('tanggal_berakhir'),
            'tempat' => $this->request->getVar('tempat'),
            'link_gmaps' => $this->request->getVar('link_gmaps'),
            'gambar_acara' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);
        session()->setFlashdata('pesan', 'Acara berhasil ditambahkan.');
        return redirect()->to('/acara');
    }
    public function delete($id_acara)
    {
        $acara = $this->acaraModel->find($id_acara);
        if($acara['gambar_acara'] != 'gambar_acara_default.jpg'){
            unlink('img/'. $acara['gambar_acara']);
        }
        $this->acaraModel->delete($id_acara);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/acara');
    }
    public function edit_acara($nama_acara)
    {
        $data = [
            'title' => 'Form Ubah Data Ikan',
            'acara' => $this->acaraModel->getAcara($nama_acara)
        ];
        return view('acara/edit_acara', $data);
    }
    public function update($id_acara)
    {
        $namaLama = $this->acaraModel->getAcara($this->request->getVar('nama_acara'));
        if($namaLama && $namaLama['nama_acara'] == $this->request->getVar('nama_acara')){ 
            $rule_nama_acara = 'required';
        } else {
            $rule_nama_acara ='required|is_unique[ikan.nama_ikan]';
        }
    $nama_acara = url_title($this->request->getVar('nama_acara'), '-', true);
    $gambarAcara = $this->request->getFile('gambar_acara');
    if ($gambarAcara->getError() == 4)
    {
        $namaGambar = $this->request->getVar('gambar_acaraLama');
    } else {
        $namaGambar = "gambar_acara_". $nama_acara. ".jpg";
        if($this->request->getVar('gambar_acaraLama') != 'gambar_acara_default.jpg'){
            unlink('img/'. $this->request->getVar('gambar_acaraLama'));
            }
        $gambarAcara->move('img',$namaGambar);
    }
    $this->acaraModel->save([
        'id_acara' => $id_acara,
        'nama_acara' => $this->request->getVar('nama_acara'),
        'audiens' => $this->request->getVar('audiens'),
        'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
        'tanggal_berakhir' => $this->request->getVar('tanggal_berakhir'),
        'tempat' => $this->request->getVar('tempat'),
        'link_gmaps' => $this->request->getVar('link_gmaps'),
        'gambar_acara' => $namaGambar,
        'deskripsi' => $this->request->getVar('deskripsi')
    ]);
    session()->setFlashdata('pesan', 'Data berhasil diubah.');
    return redirect()->to('/acara');
    }
}