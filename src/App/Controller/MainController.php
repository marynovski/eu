<?php

namespace App\Controller;

use App\Controller;

class MainController extends Controller
{
    public function showMe()
    {
        return $this->renderView('test.html.php', [
            'name' => 'Kamil',
        ]);
    }
}