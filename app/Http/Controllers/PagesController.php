<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
      * PAGE VIEW
      * ---------
      * Display The Homepage
      *
      **/
    public function index()
    {
    
    	/*PAGE INCLUDES*/
    
    
    	/*DISPLAY PAGE*/
		return view('pages.home');
    }
    
    /*================================
	//LIFE SCIENCES SERVICES
	================================*/
	/**
	  * PAGE VIEW
	  * ---------
	  * LSS Homepage
	  *
	  **/
	public function lssIndex()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.lss.index');
	
	}
	
	
	
	
	/*===============================
	//ENERGY SECTOR SERVICES
	===============================*/
	/**
	  * PAGE VIEW
	  * ---------
	  * ESS Homepage
	  *
	  **/
	public function essIndex()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.ess.index');
	
	}
}
