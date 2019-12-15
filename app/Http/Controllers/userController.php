<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class userController extends Controller{

	public function home(){
		return view('User/home');
	}

	public function wisata(){
		$wisata = DB::table('wisata')->get();
		return view('/User/wisata/wisata',['wisata'=>$wisata]);
	}
	public function kuliner(){
		$kuliner = DB::table('kuliner')->get();
		return view('/user/kuliner/kuliner',['kuliner'=>$kuliner]);
	}
	public function event(){
		$event = DB::table('event')->get();
		return view('/user/event/event',['event'=>$event]);
	}
	public function informasiWisata($id){
		$wisata = DB::table('wisata')->where('id_wisata',$id)->get();
		$komentarWisata = DB::table('komentar_wisata')->where('id_komentar',$id)->get();
		return view('/user/wisata/informasiWisata',['wisata'=>$wisata],['komentarWisata'=>$komentarWisata]);
	}
	public function informasiEvent($id){
		$event = DB::table('event')->where('id_event',$id)->get();
		$komentarEvent = DB::table('komentar_event')->where('id_event',$id)->get();
		return view('/user/event/informasiEvent',['event'=>$event],['komentarEvent'=>$komentarEvent]);
	}
	public function informasiKuliner($id){
		$kuliner = DB::table('kuliner')->where('id_kuliner',$id)->get();
		$komentarKuliner = DB::table('komentar_kuliner')->where('id_kuliner',$id)->get();
		return view('/user/kuliner/informasiKuliner',['kuliner'=>$kuliner],['komentarKuliner'=>$komentarKuliner]);
	}

	public function komentarW($id){
		$wisata = DB::table('wisata')->where('id_wisata',$id)->get();
		return view('/User/wisata/komentarWisata',['wisata'=>$wisata]);
	}
	public function komentar_wisata(Request $data){
			$visit = DB::table('pengguna')->get();
			$nama = $data->user;
			$pengguna = DB::table('pengguna')->where('username',$data->user)->get();
				
			foreach($pengguna as $p){
				if($p->username == $nama ){
					DB::table('komentar_wisata')->insert([
						'id_komentar' => $data->id,
						'komentar' => $data->komentar,
						'username' => $data->user
					]);
					return redirect('/home/wisata');
					}
				}

			foreach ($visit as $p){
				if($p->username == $nama ){
				}else{
					echo "<script>
                 	  alert('anda gagal komentar, username tidak sesuai');
                 	  window.location.href = '/home/wisata';
            		</script>";
				}
			}	
	}

	public function komentarE($id){
		$event = DB::table('event')->where('id_event',$id)->get();
		return view('/User/event/komentarEvent',['event'=>$event]);
	}

	public function komentar_event(Request $data){
			$visit = DB::table('pengguna')->get();
			$nama = $data->user;
			$pengguna = DB::table('pengguna')->where('username',$data->user)->get();
				
			foreach($pengguna as $p){
				if($p->username == $nama ){
					DB::table('komentar_event')->insert([
					'id_event' => $data->id,
					'komentar' => $data->komentar,
					'username' => $data->user
					]);
					return redirect('/home/event');
					}
				}

			foreach ($visit as $p){
				if($p->username == $nama ){
				}else{
					echo "<script>
                 	  alert('anda gagal komentar, username tidak sesuai');
                 	  window.location.href = '/home/event';
            		</script>";
				}
			}	
	}

	public function komentarK($id){
		$kuliner = DB::table('kuliner')->where('id_kuliner',$id)->get();
		return view('/User/kuliner/komentarKuliner',['kuliner'=>$kuliner]);
	}
	public function komentar_kuliner(Request $data){
			$visit = DB::table('pengguna')->get();
			$nama = $data->user;
			$pengguna = DB::table('pengguna')->where('username',$data->user)->get();
				
			foreach($pengguna as $p){
				if($p->username == $nama ){
					DB::table('komentar_kuliner')->insert([
						'id_kuliner' => $data->id,
						'komentar' => $data->komentar,
						'username' =>$data->user
					]);
					return redirect('/home/kuliner');
					}
				}

			foreach ($visit as $p){
				if($p->username == $nama ){
				}else{
					echo "<script>
                 	  alert('anda gagal komentar, username tidak sesuai');
                 	  window.location.href = '/home/kuliner';
            		</script>";
				}
			}	

	}

	public function alam(){
		$wisata = DB::table('wisata')->where('kategori','alam')->get();
		return view('/User/wisata/alam',['wisata'=>$wisata]);
	}
	public function sejarah(){
		$wisata = DB::table('wisata')->where('kategori','sejarah')->get();
		return view('/User/wisata/sejarah',['wisata'=>$wisata]);
	}
	public function museum(){
		$wisata = DB::table('wisata')->where('kategori','museum')->get();
		return view('/User/wisata/museum',['wisata'=>$wisata]);
	}


}


 ?>