<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    public function biodata(){
        $data=array(
            array("nama"=>"andika", "kelas"=>"XI RPL"),
            array("nama"=>"fahrezi", "kelas"=>"XI RPL"),
            array("nama"=>"haliq", "kelas"=>"XI RPL")
        );
        return $data;
    }
}
