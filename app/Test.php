<?php

namespace App;

use filemaker_laravel\Database\Eloquent\Model;

class Test extends Model
{
    protected $layoutName = 'Web_Layout';
    protected $primaryKey = 'user_id';
    
    /*public static function getUserNames()
    {
        return[
           'pallavi',
           'kirti'
        ];
    }*/
    public function __construct()
    {
        set_error_handler(null);
        set_exception_handler(null);
    }
}
?>