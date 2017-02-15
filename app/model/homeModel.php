<?php
/**
 * 
 * @copyright   Copyright(c) 2016
 * @author      silen
 * @version     1.0
 */
class homeModel extends Model{
        function test(){
                echo "this is test homeModel";
        }
        
        function testResult(){
                $this->db->show_databases();
        }
}


