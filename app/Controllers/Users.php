<?php

namespace App\Controllers;

class Users extends BaseController{

    public function writer(){
        $data['title'] = "Writers";
        $data['page_title'] = "Writers";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/users/writers').
            view('needed/footer');
    }
}
