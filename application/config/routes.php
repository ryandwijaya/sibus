<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	
	// authentication

	$route['login'] = 'AuthController/index';
	$route['logout'] = 'AuthController/logout';
	$route['auth/login'] = 'AuthController/login';
	

	$route['dashboard'] = 'DashboardController/index';


	$route['beli'] = 'Welcome/beli';
	$route['beli_admin'] = 'Welcome/beli_admin';

	$route['tiket'] = 'LaporanController/tiket';

	$route['bus'] = 'BusController/index';
	$route['bus/create'] = 'BusController/create';
	$route['bus/edit/(:any)'] = 'BusController/edit/$1';

	$route['bus/delete/(:any)'] = 'BusController/delete/$1';


	$route['bayar/(:any)'] = 'PemesananController/konfirmasi/$1';
	$route['pembayaran/konfirmasi'] = 'PemesananController/pembayaran';

	$route['tujuan'] = 'TujuanController/index';
	$route['tujuan/create'] = 'TujuanController/create';
	$route['tujuan/edit/(:any)'] = 'TujuanController/edit/$1';
	$route['tujuan/delete/(:any)'] = 'TujuanController/delete/$1';
	$route['ajaxTujuan/(:any)/(:any)'] = 'PemesananController/ajaxGetHarga/$1/$2';

	$route['jalur'] = 'JalurController/index';
	$route['jalur/create'] = 'JalurController/create';
	$route['jalur/edit/(:any)'] = 'JalurController/edit/$1';
	$route['jalur/delete/(:any)'] = 'JalurController/delete/$1';

	$route['jadwal'] = 'JadwalController/index';
	$route['jadwal/create'] = 'JadwalController/create';
	$route['jadwal/print'] = 'JadwalController/print';
	$route['jadwal/edit/(:any)'] = 'JadwalController/edit/$1';
	$route['jadwal/delete/(:any)'] = 'JadwalController/delete/$1';
	$route['ajax/jadwal/(:any)'] = 'PemesananController/ajaxGetJadwal/$1';
	$route['ajaxCekKursi/(:any)/(:any)'] = 'PemesananController/ajaxGetKursi/$1/$2';

	$route['pemesanan'] = 'PemesananController/index';
	$route['pemesanan/print'] = 'PemesananController/print';
	$route['pemesanan/buy'] = 'Welcome/buy';
	$route['pemesanan/cetak'] = 'PemesananController/cetak';
	$route['pemesanan/buy_admin'] = 'Welcome/buy_admin';
	$route['pemesanan/create'] = 'PemesananController/create';
	$route['pemesanan/edit/(:any)'] = 'PemesananController/edit/$1';
	$route['pemesanan/delete/(:any)'] = 'PemesananController/delete/$1';
	$route['pemesanan/batal/(:any)'] = 'PemesananController/batal/$1';

	$route['user'] = 'UserController/index';
	$route['user/create'] = 'UserController/create';
	$route['user/edit/(:any)'] = 'UserController/edit/$1';
	$route['user/delete/(:any)'] = 'UserController/delete/$1';
	

	$route['konfirmasi'] = 'Welcome/konfirmasi';
	$route['admin/konfirmasi'] = 'KonfirmasiController/index';
	$route['admin/laporan'] = 'LaporanController/index';
	$route['admin/konfirmasi/do/(:any)'] = 'KonfirmasiController/do/$1';
	$route['admin/konfirmasi/delete/(:any)'] = 'KonfirmasiController/delete/$1';
	$route['printTiket/(:any)'] = 'KonfirmasiController/printTiket/$1';

	$route['peminat/tujuan/harian'] = 'LaporanController/peminat_harian';
	$route['surat_jalan/(:any)/(:any)'] = 'LaporanController/surat_jalan/$1/$2';
	


	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

