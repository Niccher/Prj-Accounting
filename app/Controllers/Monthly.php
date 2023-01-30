<?php

namespace App\Controllers;

class Monthly extends BaseController{

    public function index(){
        $data['title'] = "Monthly View";
        $data['page_title'] = "Monthly";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/monthly/monthly').
            view('needed/footer_monthly');
    }

}
