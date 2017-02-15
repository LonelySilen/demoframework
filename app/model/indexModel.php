<?php
/**
 * 
 * @copyright   Copyright(c) 2016
 * @author      silen
 * @version     1.0
 */
class indexModel extends Model{
    
        function testDatabases(){
                $this->db->show_databases();    
        }
}


