<?php

namespace Controllers;

use Core\Abstracts\Controller;

class DashboardController extends Controller {
    function show() {
        return $this->render("admin/dashboard");
    }
}