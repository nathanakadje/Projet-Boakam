<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VueController extends Controller
{
    //
    public function chooseRoom()
    {
        return view('canaan');
    }

    public function acceuil()
    {
        return view('index');
    } 
    public function canaanservice()
    {
        return view('services');
    } 

    
}
