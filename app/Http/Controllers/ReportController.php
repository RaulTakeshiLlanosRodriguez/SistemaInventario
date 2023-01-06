<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Models\Mueble;
use Barryvdh\Snappy\Facades\SnappyPdf;

class ReportController extends Controller
{
    public function report(){
        $muebles= Mueble::all();
        $equipos= Equipo::all();
        $pdf = SnappyPdf::loadView('pdf.report', compact('muebles','equipos'));
        return $pdf->inline('report.pdf');
    }

    public function reportMueble(){
        $muebles= Mueble::all();
        $pdf = SnappyPdf::loadView('pdf.reportMueble', compact('muebles'));
        return $pdf->inline('reportMueble.pdf');
    }

    public function reportEquipo(){
        $equipos= Equipo::all();
        $pdf = SnappyPdf::loadView('pdf.reportEquipo', compact('equipos'));
        return $pdf->inline('reportEquipo.pdf');
    }
}
