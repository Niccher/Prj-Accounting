<?php

namespace App\Controllers;

class Invoices extends BaseController
{
    public function invoices(){

        $data['title'] = "Invoices";
        $data['page_title'] = "Invoices";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/home').
            view('needed/footer');
    }
}
