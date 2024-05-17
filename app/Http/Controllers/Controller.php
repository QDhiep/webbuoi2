<?php

namespace App\Http\Controllers;

abstract class Controller
{
    
    public function index()

    {
    
    echo "index";
    
    }
    
    public function show()
    
    {
    
    echo "show";
    
    }
    
    public function edit($id)
    
    {
    
    echo "edit-".$id;
    
    }
    
    public function list($page=1)
    
    {
    
    echo "page-".$page;  
    
    }
    
}
