<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Session;
use App\Models\Buku;
use App\Model\User;
use Carbon\Carbon;
use DB;

class PeminjamanController extends Controller
{
    public function index(){
        $data_pinjam = Peminjaman::all();
        // dd($data_pinjam);
        return view('datapinjam', compact('data_pinjam'));
    }

    public function pinjam($id){
        
        $user = Session::get('idUser');
            $tanggal_pinjam = Carbon::now()->toDateString();
            $tanggal_kembali = Carbon::now()->addDays(7)->toDateString();
        DB::table('peminjaman')->insert([
            'id_user' => $user,
            'id_buku' =>$id,
            'tanggal_pinjam'=> $tanggal_pinjam,
            'tanggal_kembali'=>$tanggal_kembali,
            'status_del'=>'0',
        ]);    
            
            return redirect('/homeuser')->with('success','berhasil meminjam buku. Jangan lupa kembalikan buku maksimal 1 minggu dari tanggal pinjam ya!');
    }

    public function edit($id) {

    DB::table('peminjaman')->where('id_peminjaman',$id)->update(
        ['status_del' => '1']);
    return redirect('/data');   
    
    }
}