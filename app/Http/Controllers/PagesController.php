<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Document;

class PagesController extends Controller
{
    public function check(){
        dd(Section::find(1)->documents);
    }
}
