<?php
/**
 * 
 * @copyright   Copyright(c) 2016
 * @author      silen
 * @version     1.0
 */

class indexController extends Controller {
        
        public function __construct() {
                parent::__construct();
        }

        public function index() {
                $data['test'] = "silen_email@foxmail.com";
                $this->showTemplate('index', $data);
        }
        
        public function testDb() {
                $modTest = $this->model('index');        //示例化test模型        
                $databases = $modTest->testDatabases(); //调用test模型中 testDatebases()方法
                var_dump($databases);
        }
}
