<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller

    {
        public function index()
        {

        return view("user.index");
        
        }
        
        public function show()
        
        {
        
        return view("user.show");
        
        }
        
        public function edit($id)
        
        {
        
        return view("user.edit",["userid"=>$id]);
        
        }
        
        public function list($page=1)
        
        {
        
        $title="Danh sách";
        $data = ["name"=>"Quách Đại Hiệp","lop"=>"CCQ2211j"];
        return view("user.list",compact("title","data"));
    }
}
