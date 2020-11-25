<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absen;
use PDF;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = absen::all();
        // dd($absen);
    	return view('absen',['absen'=>$absen]);
    }
 
    public function cetak_pdf()
    {
    	$absen = absen::all();
 
    	$pdf = PDF::loadview('absen_pdf',['absen'=>$absen]);
    	return $pdf->stream();
    }
}