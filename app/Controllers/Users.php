<?php

namespace App\Controllers;

use App\Models\Mod_Users;

class Users extends BaseController{

    public function writer(){
        $data['title'] = "Writers";
        $data['page_title'] = "Writers";

        $mod_users = new Mod_Users();
        $users['user_work'] = $mod_users->users_work_done();

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/users/writers', $users).
            view('needed/footer');
    }

    public function writer_profile(){
        echo "User profile Modal";
        /*$data['title'] = "Writers";
        $data['page_title'] = "Writers";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/users/profile').
            view('needed/footer');*/
    }
}
