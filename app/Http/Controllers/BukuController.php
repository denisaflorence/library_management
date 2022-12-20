<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class BukuController extends Controller
{
    
    public function index()
    {
        $data_buku = Buku::all();
        return view('bukuhome', compact('data_buku'));

    }
    public function user(){
        $data_buku = Buku::all();
        return view('homeuser', compact('data_buku'));
    }
    //method add ngarahin ke function store buat add data buku
    public function create()
    {
        return view('addbuku'); 
    }


    // Function untuk add data buku
    public function store(Request $request)
    {
        $data_buku = $request -> validate([
          'judul_buku'  => 'required',
          'nama_penerbit'  => 'required',
          'tahun_terbit'  => 'required',
          'nama_pengarang' => 'required',
          'jumlah_buku' => 'required',
          
        ],[
            'judul_buku.required'  => 'Judul Buku wajib diisi',
            'nama_penerbit.required'  => 'Nama Penerbit wajib diisi',
            'tahun_terbit.required'  => 'Tahun Terbit wajib diisi',
            'nama_pengarang.required'  => 'Nama Pengarang wajib diisi',
            'jumlah_buku.required' => 'Jumlah Buku wajib diisi',
          ]);

        
          $file = $request->file('gambar_buku');
          $uploadPath = 'images';
          $file->move($uploadPath, $file->getClientOriginalName());

    
        $data_buku = [
            'judul_buku'=>$request->judul_buku,
            'nama_penerbit'=>$request->nama_penerbit,
            'tahun_terbit'=>$request->tahun_terbit,
            'nama_pengarang'=>$request->nama_pengarang,
            'gambar_buku'=> $file->getClientOriginalName(), 
            'jumlah_buku'=>$request->jumlah_buku,
        ];
        
        Buku::create($data_buku);
      
        return redirect()->to('buku')->with('success','berhasil menambah data');
    }
   

    // method untuk edit data Buku
public function edit($id)
{
	// mengambil data buku berdasarkan id yang dipilih
	$databuku = DB::table('buku')->where('id_buku',$id)->get();
	// passing data buku yang didapat ke view edit buku
	return view('editbuku',['buku' => $databuku]);
}

// update data buku
public function update(Request $request)
{
    $file = $request->file('file_gambar');
    if($file != null){
        $uploadPath = 'images';
        $file->move($uploadPath, $file->getClientOriginalName());
        $new = $file->getClientOriginalName();
    } else {
        $new = $request->gambar_buku;
        // dd($file);
    }
    // dd($new);
	// update data buku
	DB::table('buku')->where('id_buku',$request->id_buku)->update([
        'gambar_buku' => $new,
		'judul_buku' => $request->judul_buku,
		'nama_pengarang' => $request->nama_pengarang,
		'tahun_terbit' => $request->tahun_terbit,
		'nama_penerbit' => $request->nama_penerbit,
        'jumlah_buku'=>$request->jumlah_buku
	]);
	// alihkan halaman ke halaman koleksi admin
	return redirect('/buku');
}


public function hapus($id)
{
	// menghapus data buku berdasarkan id yang dipilih
	DB::table('buku')->where('id_buku',$id)->delete();
		
	// alihkan halaman ke halaman koleksi
	return redirect('/buku');
}

}


