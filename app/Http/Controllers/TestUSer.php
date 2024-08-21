<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestUSer extends Controller
{
    public function boardMember(){
        $userID = [ '4', '2' ];
        $userNames = User::whereIn('id', $userID)->pluck('name');
        return $userNames;
    }
}
