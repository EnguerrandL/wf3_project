<?php

namespace App\Http\Repositories;

use DB;

class PdfRepositories {

    public function get_customer_data()
    {
        $customer_data = DB::table('tbl_customer')
        ->limit(10)
        ->get();

        return $customer_data;
    }
}

?>