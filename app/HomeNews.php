<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeNews extends Model
{
    PROTECTED $table='home_news';



    function sort_desc($limit = 100){
    	
    	$string = $this->shortdescription;
        if(strlen($string) >= $limit){
            $string = substr($string, 0, $limit).'...';     
        }
        return $string;
    }
}
