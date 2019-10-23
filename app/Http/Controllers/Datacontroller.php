<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class Datacontroller extends Controller
{
    public function getprovinsi (Request $request){

        if($request->has('serch')){

            $daftarProvinsi = RajaOngkir::provinsi()->search($request->serch)->get();
        }
        else{

            $daftarProvinsi = RajaOngkir::provinsi()->all();
        }
        return view('data/index',['daftarProvinsi' => $daftarProvinsi]);

    }
    public function getkota ($id){
        $provinsi =  RajaOngkir::provinsi()->find($id);
        $daftarkota = RajaOngkir::provinsi()->find($id);
        $daftarkota = RajaOngkir::kota()->dariProvinsi($id)->get();

        return view('data/kotawithpid',['daftarkota' => $daftarkota, 'provinsi'=> $provinsi]);


    }

    public function getkotaall(Request $request){

        if($request->has('cari')){

            $daftarkotaall = RajaOngkir::kota()->search($request->cari)->get();
        }
        else{

            $daftarkotaall = RajaOngkir::kota()->all();
        }

        return view('data/kota',['daftarkotaall' => $daftarkotaall,]);

    }
    public function tosearch(){

        $daftarProvinsi = RajaOngkir::provinsi()->all();
        return view('data/search/search', ['daftarProvinsi' => $daftarProvinsi]);

    }

    public function searchdata(Request $request){


            $daftarProvinsiser = RajaOngkir::kota()->dariProvinsi($request->id)->search($request->carii)->get();

        return view('data/search/searchresult',['hasil' => $daftarProvinsiser,]);

    }
}
