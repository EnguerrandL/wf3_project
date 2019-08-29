<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PdfRepositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use PDF;


class DynamicPDFController extends Controller
{

    protected $repository;

    public function __construct() {
        $this->repository = new PdfRepositories();
        // parent::__construct();
    }

    public function index()
    {

        $customer_data = $this->repository->get_customer_data();
        return view('pdf.dynamic_pdf')->with('customer_data', $customer_data);
    }

    public function pdf()
    {

        $customer_data['customer_data'] = $this->repository->get_customer_data();
        $pdf = PDF::loadView('pdf.invoice', $customer_data);
         $pdf->save('../storage/app/factures/facture.pdf');
         return $pdf->stream();
    }
}
