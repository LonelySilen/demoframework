<?php
/**
 * 应用入口文件
 * @copyright   Copyright(c) 2016
 * @author      silen
 * @version     1.0
 */
require dirname($_SERVER['SCRIPT_FILENAME']).'/system/framework.php';
require dirname($_SERVER['SCRIPT_FILENAME']).'/system/config.php';
Application::run($CONFIG);



