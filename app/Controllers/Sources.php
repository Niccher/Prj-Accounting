<?php

namespace App\Controllers;

class Sources extends BaseController
{
    public function fiverr(){
        $data['title'] = "Accounts from Fiverr";
        $data['page_title'] = "Source";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/home').
            view('needed/footer');
    }

    public function direct_client(){
        $data['title'] = "Accounts from DC";
        $data['page_title'] = "Source";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/home').
            view('needed/footer');
    }
}
