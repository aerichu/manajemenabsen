<?php

namespace App\Models;
use CodeIgniter\Model;

class M_gudang extends Model
{
 public function tampil($tabel ,$id){
 return $this->db->table($tabel)
 ->orderby($id,'desc')
 ->get()
 ->getResult();

 }

public function tampil1($tabel){
 return $this->db->table($tabel)
 ->get()
 ->getResult();

 }

 public function join($tabel, $tabel2, $on, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->orderby($id,'desc')
 ->get()
 ->getResult();

 }

 public function joinWhere($tabel, $tabel2, $on, $where){
 return $this->db->table($tabel, $where)
 ->join($tabel2, $on,'left')
 ->get()
 ->getRow();

 }

 //return $this->db->query('Select * from brg_m
// join barang on brg_m.id_brg=barang.id_brg')
 // ->getResult();

 public function getWhere($tabel,$where){
  return $this->db->table($tabel)
  ->getWhere($where)
  ->getRow();
 }
 
 public function tambah($tabel, $isi){
    return $this->db->table($tabel)
    ->insert($isi);
 }

 public function edit($tabel, $isi, $where){
    return $this->db->table($tabel)
    ->update($isi, $where);
 }

 public function hapus($table,$where){
   return $this->db->table($table)
    ->delete($where);
 }

 public function upload($photo){
   $imageName = $photo->getName();
   $photo->move(ROOTPATH . 'public/img', $imageName);
 }


}