<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function calendar(){

        $data['title'] = "Activities";
        $data['page_title'] = "Calendar";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/home').
            view('needed/footer');
    }
}
