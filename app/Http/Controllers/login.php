<?php

namespace App\Http\Controllers;
use App\pengguna;
use Illuminate\Support\Facades\Auth;
use App\pengurus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;

class login extends Controller{

    function tampilPengguna(){
        return view('pengguna');
    }
    function tampilPengurus(){
        return view('pengurus');
    }
    function tampilLogin(){
        return view('login');
    }

    function masuk(Request $kiriman){
     	$data1= pengguna::where('username',$kiriman->username)->where('password',$kiriman->password)->get();
    	$data2= pengurus::where('username',$kiriman->username)->where('password',$kiriman->password)->get();
    	if(count($data1)>0){
    		//berhasil login pengguna
    		Auth::guard('pengguna')->LoginUsingId($data1[0]['id']);
             echo "<script>
                   alert('anda berhasil login sebagai $kiriman->username ');
                  window.location.href = '/home';
            </script>";
    	}else if(count($data2)>0){
    		//berhasil login penggurus
    		Auth::guard('pengurus')->LoginUsingId($data2[0]['id']);
             echo "<script>
                   alert('anda berhasil login sebagai $kiriman->username');
                  window.location.href = '/beranda';
            </script>";
    	}else{
    		//gagal login

            echo "<script>
                   alert('anda gagal login, password atau username salah');
                  window.location.href = '/login';
            </script>"; 
    	}
    }

    function keluar(){
    	if(Auth::guard('pengguna')->check()){
    		Auth::guard('pengguna')->logout();
    	}else if(Auth::guard('pengurus')->check()){
    		Auth::guard('pengurus')->logout();
    	}
         return view('login');
    }

    function register(){
        return view('registrasi');
    }

    function simpanRegister(Request $data){
        $status =   DB::table('pengguna')->insert([
            'username' => $data->username,
            'password' => $data->password,
            'email' => $data->email,
            ]);
         echo "<script>
                   alert('anda berhasil registrasi');
                  window.location.href = '/login';
            </script>";
            
    }


    function email(){
      return view('masukEmail');
    }
     function ganti(Request $data){
        $pengguna = DB::table('pengguna')->where('email',$data->email)->get();
        
        if($pengguna == $data->email){
            return view('login');
        }else{
          return view('registrasi');
        }

     }
}
