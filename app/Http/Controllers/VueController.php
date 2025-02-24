<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VueController extends Controller
{
    //
    public function chooseRoom()
    {
        return view('cana-plage-hotel');
    }

    public function acceuil()
    {
        return view('index');
    } 
    public function canaanservice()
    {
        return view('services');
    } 
    public function canaanroom()
    {
        return view('cana-plage-rooms');
    } 
    
    public function canaancontact()
    {
        return view('cana-plage-contacts');
    }
    public function contacts()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about-us');
    }
}
