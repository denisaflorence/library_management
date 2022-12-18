<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    
    public function index()
    {
        $data_buku = Buku::all();
        return view('bukuhome', compact('data_buku'));

    }
    public function user(){
        return view('homeuser');
    }

    public function pinjam(){
        return view('pinjam');
    }
    public function create()
    {
        return view('addbuku');
    }

    public function addbook()
    {
        $books = new Buku();
        $books->judul_buku = $request->judul_buku;
        $books->nama_penerbit = $request->nama_penerbit;
        $books->tahun_terbit = $request->tahun_terbit;
        $books->nama_pengarang = $request->nama_pengarang;
        $books->gambar_buku = $request->gambar_buku;
        $books->status_del = 2;
        $books->save();

        return redirect()->route('buku');
    }
    // public function store(Request $request)
    // {
    //     Session::flash('judul_buku',$request->judul_buku);
    //     Session::flash('nama_pegarang',$request->nama_pengarang);
    //     Session::flash('nama_penerbit',$request->nama_penerbit);
    //     Session::flash('tahun_terbit',$request->tahun_terbit);
    //     Session::flash('gambar_buku',$request->gambar_buku);
    //     // Session::flash('status_del',status_del='0');

    //     $request -> validate([
    //       'judul_buku'  => 'required',
    //       'nama_penerbit'  => 'required',
    //       'tahun_terbit'  => 'required',
    //       'nama_pegarang' => 'required',
    //       'gambar_buku'  => 'required',
          
    //     ],[
    //         'judul_buku.required'  => 'NIM wajib diisi',
    //         'nama_penerbit.required'  => 'NIM wajib diisi angka',
    //         'tahun_terbit.required'  => 'NIM terdaftar sudah ada dalam database',
    //         'nama_pegarang.required'  => 'Nama wajib diisi',
    //         'gambar_buku.required'  => 'Jurusan wajib diisi',
    //       ]);
    //     $data_buku = [
    //         'judul_buku'=>$request->judul_buku,
    //         'nama_penerbit'=>$request->nama_penerbit,
    //         'tahun_terbit'=>$request->tahun_terbit,
    //         'nama_pegarang'=>$request->nama_pengarang,
    //         'gambar_buku'=>$request->gambar_buku,
    //     ];
    //     Buku::create($data_buku);
    //     return redirect()->to('bukuhome')->with('success','berhasil menambah data');
        
        
        
    // }
}
