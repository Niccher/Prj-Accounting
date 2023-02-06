<?php

namespace App\Controllers;

use App\Models\Mod_Entries;
use App\Models\Mod_Users;

class Home extends BaseController
{
    public function home(){
        $data['title'] = "Welcome to Accounts";
        $data['page_title'] = "Home";

        $mod_entry = new Mod_Entries();
        $entries['entry_banner'] = $mod_entry->entry_home_banner();

        $mod_users = new Mod_Users();
        $user_work = $mod_users->users_work_done();
        $entries['user_work'] = array_slice($user_work,0,5);

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/home', $entries).
            view('needed/footer_charts');
    }
}
