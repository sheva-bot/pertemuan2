<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
    public function anggota(){
        $item = DB::table('anggota')
            ->select('*')
            ->get();

        return view('anggota0265', compact('item'));
    }

    public function buku(){
        $item = DB::table('buku as b')
            ->select('b.*', 'k.*')
            ->leftjoin('kategori as k', 'b.kategori_id', '=', 'k.kategori_id')
            ->get();
            
        return view('buku0265', compact('item'));
    }

    public function petugas(){
        $item = DB::table('petugas')
            ->select('*')
            ->get();

        return view('petugas0265', compact('item'));
    }

    public function pinjam(){
        $item = DB::table('pinjam as p')
            ->select('p.*', 'b.*', 'a.*')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->get();
            
        return view('pinjam0265', compact('item'));
    }

    public function kembali(){
        $item = DB::table('kembali as k')
            ->select('k.*', 'b.*', 'p.*', 'a.*')
            ->leftjoin('pinjam as p', 'p.pinjam_id', '=', 'k.pinjam_id')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->get();

        return view('kembali0265', compact('item'));
    }

    public function anggotaLike(){
        $item = DB::table('anggota')
            ->select('*')
            ->where('anggota_nama','like','z%')
            ->get();
            
        return view('anggota0265', compact('item'));
    }

    public function pinjamSelectLike(){
        $item = DB::table('pinjam as p')
            ->select('p.*', 'b.*', 'a.*')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->where('b.buku_judul', 'like', 's%')
            ->get();
            
        return view('pinjam0265', compact('item'));
    }
}
