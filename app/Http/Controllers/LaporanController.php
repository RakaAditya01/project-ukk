<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\siswa;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {
        return view('Laporan.laporan-pdf');
    }

    public function create(){
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        $pembayaran = Pembayaran::orderBy('created_at', 'ASC')->get();

        $kelas = request('kelas');
        // $kelas = '';
        // $kelas = 'XII RPL 1';
        try {
            
          if ($kelas =="") {
            $data = [
              'pembayaran' => Pembayaran::orderBy('created_at', 'ASC')->get()
            ];

          }  else {
            $i = 0;
            foreach ($pembayaran as $value) {
              if ($value->siswa->kelas->nama_kelas == $kelas) {
                $data[$i] = $value;
              }
            }
            $data = [
              'pembayaran' => $data
            ];
          }
          

        // dd($data);
          $pdf = PDF::loadView('Laporan.laporan-pdf', $data);
          return $pdf->stream('Laporan.laporan-pdf');
        } catch (\Throwable $th) {
          return redirect('dashboard/laporan/');
        }
    }
}
