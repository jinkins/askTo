<?php
class BDD extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=sid-sql.redheberg.com;dbname=xpqhepxe_askTo' , 'xpqhepxe_askTo', 'askTo', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //parent::__construct('mysql:host=localhost;dbname=idecopy' , 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    
}

?>
