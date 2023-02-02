<?php

namespace App\Controllers;

class Sources extends BaseController{

    public function both_sources(){
        $data['title'] = "Accounts from All Sources";
        $data['page_title'] = "Source_both";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/sources/both').
            view('needed/footer');
    }

    public function both_sources_writer(){
        $data['title'] = "Accounts from All Sources";
        $data['page_title'] = "Source_both";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/sources/show_timeline_both').
            view('needed/footer');
    }

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

    public function work_timeline_both(){
        $data['title'] = "Account analytics";

        $agent = $this->request->getUserAgent();
        $uri = new \CodeIgniter\HTTP\URI($agent->getReferrer());

        $data['page_title'] = "Source_both";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/show_timeline_both').
            view('needed/footer');
    }

    public function add_entry(){
        $data['title'] = "Add entry";

        $data['page_title'] = "Source_add";

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/add_entry').
            view('needed/footer_add_entry');
    }
}
