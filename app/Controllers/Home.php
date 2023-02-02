<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(){
        $data['title'] = "Welcome to Accounts";
        $data['page_title'] = "Home";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/home').
            view('needed/footer_charts');
    }
}
