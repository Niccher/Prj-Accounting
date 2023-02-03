<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Entries extends Model{

    public function entry_add($wrk_name, $wrk_writer, $wrk_price, $wrk_paid, $wrk_source, $wrk_status, $wrk_c_date){
        if (auth()->loggedIn()){
            $data = array(
                'ent_name'       => $wrk_name,
                'ent_date'       => $wrk_c_date,
                'ent_writer'     => $wrk_writer,
                'ent_price'      => $wrk_price,
                'ent_writer_pay' => $wrk_paid,
                'ent_profit'     => (intval($wrk_price) - intval($wrk_paid)),
                'ent_source'     => $wrk_source,
                'ent_status'     => $wrk_status,
                'ent_created'    => date('Y-m-d H:i:s'),
            );
            $this->db ->table('tbl_entries')->insert($data);
        }
    }

    public function entry_edit(){
        if (auth()->loggedIn()){
        }
    }

    public function entry_delete(){
        if (auth()->loggedIn()){
        }
    }

    public function entry_list_all(){
    }

    public function entry_list_fiverr(){
    }

    public function entry_list_dc(){
    }
}
