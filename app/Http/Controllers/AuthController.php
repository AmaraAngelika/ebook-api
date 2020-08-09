<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "nis" => 3103118017,
            "name" => "Amara Angelika",
            "gender" => "Perempuan",
            "phone" => "081239973489",
            "class" => "XII RPL 1"
        ];
    }
}
