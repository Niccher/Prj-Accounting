<?php

namespace App\Controllers;

use App\Models\Mod_Users;

class Users extends BaseController{

    public function writer(){
        $data['title'] = "Writers";
        $data['page_title'] = "Writers";

        $mod_users = new Mod_Users();
        $users['user_work'] = $mod_users->users_work_done();
        $user_profs = array();

        $counter = 0;
        foreach ($users['user_work'] as $user) {
            $counter ++;
            $name = explode('-*-', $user->ent_writer);

            if ($counter == 1){
                $user_profs = $mod_users->users_simple_profile($name[1]);
            }else{
                $user_prof = array_push($user_profs, $mod_users->users_simple_profile($name[1]));
            }
        }

        $users['user_profiles'] = $user_profs;

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
