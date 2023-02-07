<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Users extends Model{

    public function users_list(){
        $this->db2 = db_connect("default2");
        $builder = $this->db2->table('tbl_Users');
        $query_sent = $builder->select('*')->get();
        return $query_sent->getResult();
    }

    public function users_simple_profile($user_id){
        $this->db2 = db_connect("default2");
        $builder = $this->db2->table('tbl_Users');
        $query_sent = $builder->select('*')
            ->where('Id', $user_id)
            ->get();
        return $query_sent->getResult();
    }

    public function users_assigments($user_id, $source_type){
        $builder = $this->db->table('tbl_entries');
        $query_sent = $builder->select('*')
            ->where('ent_writer',$user_id)
            ->where('ent_source', $source_type)
            ->orderBy('ent_id', 'DESC')
            ->get();
        return $query_sent->getResult();
    }

    public function users_assigments_all($user_id){
        $builder = $this->db->table('tbl_entries');
        $query_sent = $builder->select('*')
            ->where('ent_writer',$user_id)
            ->orderBy('ent_id', 'DESC')
            ->get();
        return $query_sent->getResult();
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
