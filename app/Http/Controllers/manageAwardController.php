<?php

namespace App\Http\Controllers;

use App\Models\AwardRegister;
use Illuminate\Http\Request;

class manageAwardController extends Controller
{
    /**
     * award register list
     */
    public function index(){
        $data = AwardRegister::get();
        return view('admin.pages.awardRegister', compact('data'));
    }
    public function view($id){
       $id = base64_decode($id);
       $data = AwardRegister::find($id);
       return view('admin.pages.awardRegisterDetails', compact('data'));
    }
}
