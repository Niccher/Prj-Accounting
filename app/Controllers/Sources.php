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

    public function work_timeline(){
        $data['title'] = "Account analytics";

        $agent = $this->request->getUserAgent();
        $uri = new \CodeIgniter\HTTP\URI($agent->getReferrer());

        if($uri->getSegment(2) == "dc"){
            $data['page_title'] = "Source_dc";
        }else{
            $data['page_title'] = "Source_fiverr";
        }

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/show_timeline').
            view('needed/footer');
    }
}
