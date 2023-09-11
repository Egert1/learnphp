<?php

namespace App\Controllers;

class PublicController {
    public function home(){
        $name = 'Egert';
        $num = 19;
        view('home', compact('name', 'num'));
        }
    public function about(){
        echo 'about';
    }
}