<?php

namespace App\Controllers;

class Sources extends BaseController{

    public function fiverr(){
        $data['title'] = "Accounts from Fiverr";
        $data['page_title'] = "Source_fiverr";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/sources/fiverr').
            view('needed/footer');
    }

    public function direct_client(){
        $data['title'] = "Accounts from DC";
        $data['page_title'] = "Source_dc";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/dc').
            view('needed/footer');
    }
}
