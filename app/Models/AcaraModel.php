<?php
namespace App\Models;

use CodeIgniter\Model;

class AcaraModel extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'id_acara';
    protected $allowedFields = ['nama_acara','audiens','tempat','deskripsi','gambar_acara', 'tanggal_mulai', 'tanggal_berakhir','link_gmaps',];
    public function getAcara($nama_acara = false){
        if($nama_acara == false){
            return $this->findAll();
        }
        return $this->where(['nama_acara' => $nama_acara])->first();
    }
}