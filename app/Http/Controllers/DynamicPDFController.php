<?php

namespace App\Http\Controllers;

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
        return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    public function pdf()
    {
        $customer_data['customer_data'] = $this->repository->get_customer_data();
        $pdf = PDF::loadView('pdf.invoice', $customer_data);
        return $pdf->stream();
    }
}
