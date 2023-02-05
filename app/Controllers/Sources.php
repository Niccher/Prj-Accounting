<?php

namespace App\Controllers;

use App\Models\Mod_Entries;

class Sources extends BaseController{

    public function both_sources(){
        $data['title'] = "Accounts from All Sources";
        $data['page_title'] = "Source_both";

        $mod_entry = new Mod_Entries();
        $entries['entry_info'] = $mod_entry->entry_list_all();

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/sources/both', $entries).
            view('needed/footer_tables');
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

        $mod_entry = new Mod_Entries();
        $entries['entry_info'] = $mod_entry->entry_list_fiverr();

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('admin/sources/fiverr', $entries).
            view('needed/footer_tables');
    }

    public function direct_client(){
        $data['title'] = "Accounts from DC";
        $data['page_title'] = "Source_dc";

        $mod_entry = new Mod_Entries();
        $entries['entry_info'] = $mod_entry->entry_list_dc();

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/dc', $entries).
            view('needed/footer_tables');
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
            view('needed/footer_tables');
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
        $mod_entry = new Mod_Entries();

        $data['title'] = "Add entry";

        $data['page_title'] = "Source_add";
        $entries['entry_info'] = $mod_entry->entry_count_all();

        return view('needed/header', $data).
            view('needed/sidebar', $data).
            view('needed/sidebar').
            view('admin/sources/add_entry', $entries).
            view('needed/footer_add_entry');
    }

    public function insert_entry(){
        $mod_entry = new Mod_Entries();

        $request = \Config\Services::request();
        $wrk_name = $request->getVar('inp_name');
        $wrk_writer = $request->getVar('inp_writer');
        $wrk_price = $request->getVar('inp_price');
        $wrk_paid = $request->getVar('inp_paid');
        $wrk_source = $request->getVar('inp_source');
        $wrk_status = $request->getVar('inp_status');

        //$wrk_c_date = $request->getVar('inp_create_date');
        $mydatetime = str_replace('/','-', $request->getVar('inp_create_date'));
        $wrk_c_date = date("Y-m-d H:i:s", strtotime($mydatetime));

        $mod_entry->entry_add($wrk_name, $wrk_writer, $wrk_price, $wrk_paid, $wrk_source, $wrk_status, $wrk_c_date);
    }
}
