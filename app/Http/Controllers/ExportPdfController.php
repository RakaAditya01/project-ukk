<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class ExportPdfController extends Controller
{
    public function exportPdf(Request $request)
    {
        $data = [
            'title' => 'Judul Dokumen',
            'content' => 'Ini adalah konten dokumen.'
        ];

        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.export', $data));

        $pdf->setPaper('A4', 'landscape');

        $pdf->render();
        $pdf->stream();
    }
}
