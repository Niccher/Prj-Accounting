<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Users extends Model{

    public function users_list(){
    }

    public function users_profile_data(){
    }

    public function users_work_done(){
        $builder = $this->db->table('tbl_entries');
        $query_sent = $builder->select('*')
            ->groupBy('ent_writer')
            ->selectCount('ent_id', 'ent_per_person')
            ->selectSum('ent_price', 'ent_per_person_sum')
            ->selectSum('ent_writer_pay', 'ent_per_person_pay')
            ->selectSum('ent_profit', 'ent_per_person_profit')
            ->get();
        return $query_sent->getResult();
    }
}
