<?php

namespace App\Controllers;

class Activities extends BaseController{

    public function calendar(){
        $data['title'] = "Activities Calendar";
        $data['page_title'] = "Calendar";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/activities/calendar').
            view('needed/footer');
    }

    public function invoices(){
        $data['title'] = "Invoices";
        $data['page_title'] = "Invoices";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/activities/invoices').
            view('needed/footer');
    }
}
