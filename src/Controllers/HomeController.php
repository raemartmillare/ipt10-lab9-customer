<?php

namespace App\Controllers;

use App\Models\Supplier;
use App\Models\Customer;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $template = 'home';
        $data = [
            'student' => 'EARL GABRIEL DATU',
            'title' => 'IPT10 Laboratory Activity #9',
            'college' => 'College of Computer Studies',
            'university' => 'Angeles University Foundation',
            'location' => 'Angeles City, Pampanga, Philippines'
        ];
        $output = $this->render($template, $data);
        return $output;
    }
}