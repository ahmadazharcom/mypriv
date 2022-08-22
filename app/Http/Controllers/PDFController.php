<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generateInvoicePDF(){

        $pdf = PDF::loadView('invoice');

        return $pdf->download('invoice.pdf');

    }

    public function generateInvoicePDF2(){

        $pdf = PDF::loadView('invoice2');

        return $pdf->download('invoice2.pdf');

    }            

}
