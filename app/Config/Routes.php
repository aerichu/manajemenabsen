<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home/barang', 'Home::barang');
$routes->add('/home/aksi_t_barang', 'Home::aksi_t_barang');
$routes->get('/home/tambah_barang', 'Home::tambah_barang');
$routes->get('/home/index', 'Home::index');
$routes->add('/home/hapus_barang/(:num)', 'Home::hapus_barang/$1');
$routes->get('/home/tesdoang', 'Home::tesdoang');
$routes->add('/home/edit_barang/(:num)', 'Home::edit_barang/$1');
$routes->get('/home/e_barang', 'Home::e_barang');
$routes->add('/home/aksi_edit_barang', 'Home::aksi_edit_barang');


$routes->get('/home/brg_msk', 'Home::brg_msk');
$routes->get('/home/bm', 'Home::bm');
$routes->get('/home/tambah_barangm', 'Home::tambah_barangm');
$routes->get('/home/tesdoangm', 'Home::tesdoangm');
$routes->add('/home/aksi_t_barangm', 'Home::aksi_t_barangm');
$routes->add('/home/hapus_barangm/(:num)', 'Home::hapus_barangm/$1');
$routes->add('/home/edit_barangm/(:num)', 'Home::edit_barangm/$1');
$routes->get('/home/e_barangm', 'Home::e_barangm');
$routes->add('/home/aksi_edit_barangm', 'Home::aksi_edit_barangm');

$routes->get('/home/tesdoangk', 'Home::tesdoangk');
$routes->add('/home/aksi_t_barangk', 'Home::aksi_t_barangk');
$routes->get('/home/tambah_barangk', 'Home::tambah_barangk');
$routes->get('/home/bk', 'Home::bk');
$routes->get('/home/brg_klr', 'Home::brg_klr');
$routes->add('/home/hapus_barangk/(:num)', 'Home::hapus_barangk/$1');
$routes->add('/home/edit_barangk/(:num)', 'Home::edit_barangk/$1');
$routes->get('/home/e_barangk', 'Home::e_barangk');
$routes->add('/home/aksi_edit_barangk', 'Home::aksi_edit_barangk');

$routes->get('/home/last', 'Home::last');
$routes->get('/home/login', 'Home::login');



$routes->get('/home/user', 'Home::user');
$routes->get('/home/usera', 'Home::usera');
$routes->get('/home/tambah_user', 'Home::tambah_user');
$routes->get('/home/tambahusera', 'Home::tambahusera');
$routes->add('/home/aksi_t_user', 'Home::aksi_t_user');
$routes->add('/home/hapus_user/(:num)', 'Home::hapus_user/$1');
$routes->add('/home/edit_user/(:num)', 'Home::edit_user/$1');
$routes->get('/home/e_usera', 'Home::e_usera');
$routes->add('/home/aksi_edit_user', 'Home::aksi_edit_user');

$routes->get('/home/login', 'Home::login');
$routes->get('/home/login', 'Home::login');
$routes->add('/home/aksi_login', 'Home::aksi_login');

$routes->get('/home/logout', 'Home::logout');

$routes->get('/home/reset', 'Home::reset');
$routes->get('/home/reset', 'Home::reset');

$routes->get('/home/dashboard', 'Home::dashboard');
$routes->get('/home/dashboard', 'Home::dashboard');

$routes->get('/home/pp', 'Home::pp');
$routes->get('/home/pp', 'Home::pp');
$routes->add('/home/resetb', 'Home::resetb');
$routes->add('/home/resetb', 'Home::resetb');
$routes->add('/home/aksi_reset/(:num)', 'Home::aksi_reset/$1');


$routes->get('/home/setting', 'Home::setting');

$routes->get('/home/karyawan', 'Home::karyawan');
$routes->get('/home/tambahkry', 'Home::tambahkry');
$routes->add('/home/edit_kry/(:num)', 'Home::edit_kry/$1');
$routes->add('/home/aksi_t_kry', 'Home::aksi_t_kry');


$routes->add('/home/pp/(:num)', 'Home::pp/$1');
$routes->add('/home/pp', 'Home::pp');
$routes->add('/home/pp2', 'Home::pp2');

$routes->add('/home/aksi_pp', 'Home::aksi_pp');

$routes->add('/home/hapuskry/(:num)', 'Home::hapuskry/$1');

$routes->get('/home/menu1', 'Home::menu1');

$routes->get('/home/laporanm', 'Home::laporanm');
$routes->get('/home/laporank', 'Home::laporank');


$routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
$routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
