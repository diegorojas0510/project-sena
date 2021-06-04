<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index(){
        $campus = Campus::all();
        return view ('pages.admin.campus.index', compact('campus'));
    }
}
