<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_gudang;

class Home extends BaseController
{

    public function dashboard()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view('dashboard');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function index()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data ['manda'] = $model -> tampil('barang', 'id_brg');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);  
            echo view ('header');
            echo view ('menu', $data);
            echo view('barang',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambah_barang()
    {
        $model = new M_gudang();
        if (session()->get('level')>0){
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view('tesdoang');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_barang()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('kode');
        $file = $this->request->getFile('foto');
        $foto = $file->getName();

        $model = new M_gudang();
        $model->upload($file);
        $where=array('nama'=> $a);

        $isi = array(
            'nama_brg' => $a,
            'kode_brg' => $b,
            'foto' => $foto
            

        );
        $model ->tambah('barang', $isi);
        
        return redirect()->to('home/index');
    }


    public function hapus_barang($id){
        $model = new M_gudang();
        $where=array('id_brg'=>$id);
        $model->hapus('barang',$where);
        return redirect()->to('home/index');
    }

    public function edit_barang($id){
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_brg'=>$id);

            $data['satu']=$model->getWhere('barang',$where);
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view ('e_barang',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_edit_barang()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('kode');
        $id = $this->request->getPost('id');

        $where=array('id_brg'=>$id);

        $isi = array(
            'nama_brg' => $a,
            'kode_brg' => $b,

        );
        
        $model ->edit('barang', $isi, $where);
        
        return redirect()->to('home/index');
    }


    public function bm()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model -> join('brg_m','barang','brg_m.id_brg=barang.id_brg', 'id_brgm');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);  
            echo view ('header');
            echo view ('menu1',$data);
            echo view('brg_msk',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambah_barangm()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            $data['t']=$model->tampil('barang','id_brg');
            echo view ('header');
            echo view ('menu', $data);
            echo view('tesdoangm', $data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_barangm()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('jumlah');

        $isi = array(
            'id_brg' => $a,
            'jumlah' => $b,
            'tgl_m' => date('y-m-d')

        );
        $model ->tambah('brg_m', $isi);
        
        return redirect()->to('home/bm');
    }

    public function hapus_barangm($id){
        $model = new M_gudang();
        $where=array('id_brgm'=>$id);
        $model->hapus('brg_m',$where);
        return redirect()->to('home/bm');
    }

    public function edit_barangm($id){
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_brgm'=>$id);

            $data['satu']=$model->getWhere('brg_m',$where);
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view ('e_barangm',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_edit_barangm()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('jumlah');
        $c = $this->request->getPost('tgl_m');
        $id = $this->request->getPost('id');

        $where=array('id_brgm'=>$id);

        $isi = array(
            'id_brg' => $a,
            'jumlah' => $b,
            'tgl_m' => $c,

        );
        $model ->edit('brg_m', $isi, $where);
        
        return redirect()->to('home/bm');

    }


    public function bk()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data ['manda'] = $model -> join('brg_k','barang','brg_k.id_brg=barang.id_brg','id_bk');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);  
            echo view ('header');
            echo view ('menu',$data);
            echo view('brg_klr',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambah_barangk()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            $data['t']=$model->tampil('barang','id_brg');
            echo view ('header');
            echo view ('menu',$data);
            echo view('tesdoangk', $data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }

    }


    public function aksi_t_barangk()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('jumlah');

        $isi = array(
            'id_brg' => $a,
            'jumlah' => $b,
            'tgl_k' => date('y-m-d')

        );
        $model ->tambah('brg_k', $isi);
        
        return redirect()->to('home/bk');
    }

    public function hapus_barangk($id){
        $model = new M_gudang();
        $where=array('id_bk'=>$id);
        $model->hapus('brg_k',$where);
        return redirect()->to('home/bk');
    }

    public function edit_barangk($id){
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_bk'=>$id);

            $data['satu']=$model->getWhere('brg_k',$where);
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view ('e_barangk',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_edit_barangk()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('jumlah');
        $c = $this->request->getPost('tgl_k');
        $id = $this->request->getPost('id');

        $where=array('id_bk'=>$id);

        $isi = array(
            'id_brg' => $a,
            'jumlah' => $b,
            'tgl_k' => $c,

        );
        $model ->edit('brg_k', $isi, $where);
        
        return redirect()->to('home/bk');
    }















    public function user()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data ['manda'] = $model -> tampil('user', 'id_user');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);  
            echo view ('header');
            echo view ('menu', $data);
            echo view('usera',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambah_user()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view('tambahusera');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }

    }

    public function aksi_t_user()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('username');
        $b = $this->request->getPost('pw');
        $c = $this->request->getPost('level');

        $isi = array(
            'username' => $a,
            'pw' => $b,
            'level' => $c

        );
        $model ->tambah('user', $isi);
        
        return redirect()->to('home/user');
    }

    public function hapus_user($id){
        $model = new M_gudang();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('home/user');
    }

    public function edit_user($id){
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('id_user'=>$id);

            $data['satu']=$model->getWhere('user',$where);
            $model = new M_gudang();
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view ('e_usera',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_edit_user()
    {
        $model = new M_gudang();
        $a = $this->request->getPost('username');
        $b = $this->request->getPost('pw');
        $c = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_user'=>$id);

        $isi = array(
            'username' => $a,
            'pw' => $b,
            'level' => $c,

        );
        $model ->edit('user', $isi, $where);
        
        return redirect()->to('home/user');

    }







    public function login()
    {
        echo view('header');
        echo view('login');
    }

    public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('password');

        $model = new M_gudang();
        $where=array(
            'username'=> $u,
            'pw'=> md5($p)
        );
        $cek = $model->getWhere('user',$where);
        if ($cek>0){
            session()->set('id',$cek->id_user);
            session()->set('username',$cek->username);
            session()->set('level',$cek->level);
            return redirect()->to('home/dashboard');
        }else{
            return redirect()->to('home/login');
        }

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login');
    }






    public function reset()
    {
        if (session()->get('level')>0){

            $model = new M_gudang();
            $data ['manda'] = $model -> tampil('user', 'id_user');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view('header');
            echo view('menu',$data);
            echo view('reset', $data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    

    public function aksi_reset($id)
    {
        $model = new M_gudang();

        $where= array('id_user'=>$id);

        $isi = array(

            'pw' => md5('12345')      

        );
        $model->edit('user', $isi,$where);

        return redirect()->to('home/reset');
        
        
        
    }

    

    public function pp2()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('karyawan.id_user'=>session()->get('id'));
            $data['satu']=$model->joinWhere('karyawan','agama','karyawan.agama=agama.id_agama',
                $where);
            $data['t']=$model->tampil('agama','id_agama');
            //utk agama

            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where); 
            //utk masuk ke akun yg ingin kita login di login
            echo view ('header');
            echo view ('menu',$data);
            echo view('pp', $data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }






    public function pp($id)
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $where=array('karyawan.id_user'=>$id);
            $data['satu']=$model->joinWhere('karyawan','agama','karyawan.agama=agama.id_agama',
                $where);
            $data['t']=$model->tampil('agama','id_agama');
            //utk agama

            $where=array('id_user'=>$id);
            $data['satu']=$model->getWhere('karyawan',$where);
            //bisa masuk ke pp akun lain pdhl kita login di akun lain

            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where); 
            //utk masuk ke akun yg ingin kita login di login
            echo view ('header');
            echo view ('menu',$data);
            echo view('pp', $data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function aksi_pp()
    {
        $model = new M_gudang();
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $jk = $this->request->getPost('jk');
        $hp = $this->request->getPost('hp');
        $agama = $this->request->getPost('agama');
        $tgl = $this->request->getPost('tgl');
        $lhr = $this->request->getPost('lhr');
        $id = $this->request->getPost('id');

        $where=array('id_user'=>$id);

        $isi = array(
            'nama_kry' => $nama,
            'alamat_kry' => $alamat,
            'jk_kry' => $jk,
            'no_hp' => $hp,
            'agama' => $agama,
            'tgl_lahir' => $tgl,
            'tpt_lahir' => $lhr,

        );
        $model ->edit('karyawan', $isi, $where);
        
        return redirect()->to('home/pp/'.$id);

    }








    public function karyawan()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data ['manda'] = $model ->join('karyawan','user','karyawan.id_user=user.id_user','id_kry');
            
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);  
            echo view ('header');
            echo view ('menu',$data);
            echo view('karyawan',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambahkry()
    {
        if (session()->get('level')>0){
            $model = new M_gudang();
            $data['t']=$model->tampil('agama','id_agama');
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view('tambahkry');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }

    }

    public function aksi_t_kry()
    {
        $model = new M_gudang();
        $username = $this->request->getPost('username');
        $pw = $this->request->getPost('pw');
        $level = $this->request->getPost('level');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $jk = $this->request->getPost('jk');
        $hp = $this->request->getPost('hp');
        $agama = $this->request->getPost('agama');
        $tgl = $this->request->getPost('tgl');
        $lhr = $this->request->getPost('lhr');
        $file = $this->request->getFile('foto');
        $foto = $file->getName();

        

        $isi=array(
            'username' => $username,
            'pw' => $pw,
            'level' => $level

        );
        $model = new M_gudang();
        $model->upload($file);
        $model->tambah('user',$isi);
        $where=array('username'=>$username);
        $cek=$model->getWhere('user',$where);


        $kry = array(
            'id_user'=> $cek->id_user,
            'foto' => $foto,
            'nama_kry' => $nama,
            'alamat_kry' => $alamat,
            'jk_kry' => $jk,
            'no_hp' => $hp,
            'agama' => $agama,
            'tgl_lahir' => $tgl,
            'tpt_lahir' => $lhr,

        );
        $model ->tambah('karyawan', $kry);
        
        return redirect()->to('home/karyawan');

    }

    public function hapuskry($id){
        $model = new M_gudang;
        $where = array('id_user' => $id);
        $model->hapus('karyawan', $where);
        $model->hapus('user', $where);
        return redirect('home/karyawan');
    }

    public function laporanm()
    {
        $model = new M_gudang();
        if (session()->get('level')>0){
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view('laporanm');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function laporank()
    {
        $model = new M_gudang();
        if (session()->get('level')>0){
            $where=array('id_user'=>session()->get('id'));
            $data['user']=$model->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu',$data);
            echo view('laporank');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
    }




}
