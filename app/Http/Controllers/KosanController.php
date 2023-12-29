<?php

namespace App\Http\Controllers;
use App\Models\Kosan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class KosanController extends Controller
{
    public function tambahkos(Request $request){
        Kosan::create([
            'nama_kos' => $request->nama_kos,
            'fasilitas' => implode(',', $request->fasilitas),
            'luas_kamar' => $request->luas_kamar,
            'ket_biaya_lain' => $request->ket_biaya_lain,
            'alamat' => $request->alamat,
            'NoWa' => $request->NoWa,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'image' => $request->file('image')->store('post-images'),
            
        ]);
        return redirect('datfarkosku');
        
    }
}
