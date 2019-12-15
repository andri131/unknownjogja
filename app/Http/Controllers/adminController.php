<?php 


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class adminController extends Controller{

	function beranda(){
		return view('admin/beranda');
	}

	////wisata

	function wisata(){
		$wisata = DB::table('wisata')->get();
		return view('admin/wisata/wisata',['wisata'=>$wisata]);
	}
	function tambah(){
		return view('admin/wisata/tambah');
	}
	function simpanData(Request $data){
			DB::table('wisata')->insert([
			'nama_wisata' => $data->nama,
			'alamat_wisata' => $data->alamat,
			'deskripsi_wisata' => $data->deskripsi,
			'gambar' => $data->file,
			'kategori' => $data->kategori
	]);

		return redirect('/beranda/wisata');
	}
	public function hapus($id){
		DB::table('wisata')->where('id_wisata',$id)->delete();
		return redirect('/beranda/wisata');
	}

	public function update($id){
		$wisata = DB::table('wisata')->where('id_wisata',$id)->get();
		$kategori = DB::table('kategori')->get();
		return view('/Admin/wisata/edit',['wisata'=>$wisata],['kategori'=>$kategori]);
	}

	public function simupdate(Request $data){
		DB::table('wisata')->where('id_wisata',$data->id)->update([
			'nama_wisata' => $data->nama,
			'alamat_wisata' => $data->alamat,
			'deskripsi_wisata' => $data->deskripsi,
			'gambar' => $data->file,
			'kategori'=>$data->kategori
		]);
		return redirect('/beranda/wisata');
	}

	


	//////untuk kuliner
	function kuliner(){
		$kuliner = DB::table('kuliner')->get();
		return view('admin/kuliner/kuliner',['kuliner'=>$kuliner]);
	}
	function tambahKuliner(){
		return view('admin/kuliner/tambah');
	}
	function simpanDataKuliner(Request $data){
			DB::table('kuliner')->insert([
			'nama_kuliner' => $data->nama,
			'alamat' => $data->alamat,
			'deskripsi_kuliner' => $data->deskripsi,
			'gambar' => $data->file,
			/*'kategori' => $data->kategori*/
	]);

		return redirect('/beranda/kuliner');
	}
	public function hapusKuliner($id){
		DB::table('kuliner')->where('id_kuliner',$id)->delete();
		return redirect('/beranda/kuliner');
	}

	public function updateKuliner($id){
		$kuliner = DB::table('kuliner')->where('id_kuliner',$id)->get();
		/*$kategori = DB::table('kategori')->get();*/
		return view('/Admin/kuliner/edit',['kuliner'=>$kuliner]/*,['kategori'=>$kategori]*/);
	}

	public function simupdateKuliner(Request $data){
		DB::table('kuliner')->where('id_kuliner',$data->id)->update([
			'nama_kuliner' => $data->nama,
			'alamat' => $data->alamat,
			'deskripsi_kuliner' => $data->deskripsi,
			'gambar' => $data->file,
			'kategori' => $data->kategori
		]);
		return redirect('/beranda/kuliner');
	}


	/////untuk event
	function event(){
		$event = DB::table('event')->get();
		return view('admin/event/event',['event'=>$event]);
	}

	 public function tambahEvent(){
	 	$wisata = DB::table('wisata')->get();
		return view('/admin/event/tambah',['wisata'=>$wisata]);
	}
	public function simpanEvent(Request $data){
		DB::table('event')->insert([
			'nama_event' => $data->nama,
			'tanggal' => $data->tanggal,
			'nama_wisata' => $data->namaw,
			'deskripsi_event' => $data->deskripsi,
			'gambar' => $data->file
	]);

		return redirect('/beranda/event');
	}
	public function hapusEvent($id){
		DB::table('event')->where('id_event',$id)->delete();
		return redirect('/beranda/event');
	}
	public function updateEvent($id){
		$event = DB::table('event')->where('id_event',$id)->get();
		$wisata = DB::table('wisata')->get();
		$kategori = DB::table('kategori')->get();
		return view('/admin/event/edit',['event'=>$event],['wisata'=>$wisata],['kategori'=>$kategori]);
	}
	public function simupdateEvent(Request $data){
		DB::table('event')->where('id_event',$data->id)->update([
			'nama_event' => $data->nama,
			'tanggal' => $data->tanggal,
			'nama_wisata' => $data->namaw,
			'deskripsi_event' => $data->deskripsi,
			'gambar' => $data->file
		]);
		return redirect('/beranda/event');
	}

}

 ?>