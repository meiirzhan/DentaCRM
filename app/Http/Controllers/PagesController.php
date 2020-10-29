<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function check(){
        dd(Section::find(1)->documents);
    }
    public function index(){
        return view('loginPage');
    }
    public function showDentist(){
        $user = Auth::user();
        return view('dentist.notes', compact('user'));
    }
    public function showDentistCabinet(){
        $user = Auth::user();
        return view('dentist.cabinet', compact('user'));
    }
    public function showDentistStock(){
        $user = Auth::user();
        return view('dentist.stock', compact('user'));
    }
    public function showDentistDocs(){
        $user = Auth::user();
        return view('layouts.components.docs', compact('user'));
    }
    public function showDentistReport(){
        $user = Auth::user();
        return view('layouts.components.report', compact('user'));
    }
    public function showDentistSettings(){
        $user = Auth::user();
        return view('layouts.components.settings', compact('user'));
    }
    public function showDentistDetailed(){
        $user = Auth::user();
        return view('dentist.notes-detailed', compact('user'));
    }


    public function showBooker(){
        $user = Auth::user();
        return view('accountant.block', compact('user'));
    }
    public function showBookerStock(){
        $user = Auth::user();
        return view('accountant.stock', compact('user'));
    }
    public function showBookerDocs(){
        $user = Auth::user();
        return view('layouts.components.docs', compact('user'));
    }
    public function showBookerReport(){
        $user = Auth::user();
        return view('layouts.components.report', compact('user'));
    }
    public function showBookerSettings(){
        $user = Auth::user();
        return view('layouts.components.settings', compact('user'));
    }
    public function showBookerCabinet(){
        $user = Auth::user();
        return view('accountant.cabinet', compact('user'));
    }


    public function showRegistry(){
        $user = Auth::user();
        return view('registry.notes', compact('user'));
    }
    public function showRegistryDocs(){
        $user = Auth::user();
        return view('layouts.components.docs', compact('user'));
    }
    public function showRegistryReport(){
        $user = Auth::user();
        return view('layouts.components.report', compact('user'));
    }
    public function showRegistrySettings(){
        $user = Auth::user();
        return view('layouts.components.settings', compact('user'));
    }
    public function showRegistryCabinet(){
        $user = Auth::user();
        return view('registry.cabinet', compact('user'));
    }
    public function showRegistryDetailed(){
        $user = Auth::user();
        return view('registry.notes-detailed', compact('user'));
    }
}
