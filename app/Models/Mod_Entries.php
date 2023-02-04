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

    public function entry_count_all(){
        $builder = $this->db->table('tbl_entries');

        $query_all = $builder->select('ent_id')->countAllResults();

        $query_all_fiverr = $builder->select('ent_id')
            ->where('ent_source', 'source_fiverr')
            ->countAllResults();

        $query_all_dc = $builder->select('ent_id')
            ->where('ent_source', 'source_dc')
            ->countAllResults();

        $counted = array(
            'ent_all'    => $query_all,
            'ent_fiverr' => $query_all_fiverr,
            'ent_dc'     => $query_all_dc,
            );

        return $counted;
    }

    public function entry_list_all(){
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

    public function entry_list_fiverr(){
        $builder = $this->db->table('tbl_entries');
        $query_sent = $builder->select('*')
            ->where('ent_source', 'source_fiverr')
            ->groupBy('ent_writer')
            ->selectCount('ent_id', 'ent_per_person')
            ->selectSum('ent_price', 'ent_per_person_sum')
            ->selectSum('ent_writer_pay', 'ent_per_person_pay')
            ->selectSum('ent_profit', 'ent_per_person_profit')
            ->get();
        return $query_sent->getResult();
    }

    public function entry_list_dc(){
        $builder = $this->db->table('tbl_entries');
        $query_sent = $builder->select('*')
            ->where('ent_source', 'source_dc')
            ->groupBy('ent_writer')
            ->selectCount('ent_id', 'ent_per_person')
            ->selectSum('ent_price', 'ent_per_person_sum')
            ->selectSum('ent_writer_pay', 'ent_per_person_pay')
            ->selectSum('ent_profit', 'ent_per_person_profit')
            ->get();
        return $query_sent->getResult();
    }
}
