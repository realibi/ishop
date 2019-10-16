<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class DashboardController extends Controller {

    public $db;

    public function __construct()
    {
        $this->db = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'ishop',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
    }

    function showPage() {
        return $this->render("admin/dashboard");
    }

    function get(){
        $data = $this->db->select('categories', "*");

        return $data;
    }
}