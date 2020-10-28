<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function addRecord(Request $request){
        $record = new Record();
        $record->
        return redirect()->route('dentist-notes');
    }
}
