<?php
require 'Db.php';

//Fill in the missing data
Db::connect($host, $database, $user, $password);
class S_api {
    
    public static function getOne($id){
        return Db::queryOne("SELECT * FROM souteze WHERE id=?", $id);
    }
    public static function getList($filters){
        
    }
}