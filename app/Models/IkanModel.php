<?php
namespace App\Models;

use CodeIgniter\Model;

class IkanModel extends Model
{
    protected $table = 'ikan';
    protected $primaryKey = 'id_ikan';
    protected $allowedFields = ['nama_ikan', 'nama_latin', 'habitat', 'diet', 'asal', 'gambar_ikan'];
    public function getIkan($nama_ikan = false){
        if($nama_ikan == false){
            return $this->findAll();
        }
        return $this->where(['nama_ikan' => $nama_ikan])->first();
    }
}