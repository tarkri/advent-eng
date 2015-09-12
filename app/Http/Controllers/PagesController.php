<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    /**
     * Homepage
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Life Science Services
     */
    public function lssIndex()
    {
        return view('pages.lss.index');
    }

    /**
     * LSS Qualification and Validation Services
     */
    public function lssQvs()
    {
        return view('pages.lss.qvs');
    }

    /**
     * LSS Process Development Services
     */
    public function lssPds()
    {
        return view('pages.lss.pds');
    }

    /**
     * LSS Engineering Services
     */
    public function lssEs()
    {
        return view('pages.lss.es');
    }

    /**
     * LSS Project Management Services
     */
    public function lssPms()
    {
        return view('pages.lss.pms');
    }

    /**
     * LSS Training Products
     */
    public function lssTp()
    {
        return view('pages.lss.tp');
    }

    public function lssPub()
    {
        return view('pages.lss.pub');
    }

    /**
     * Energy Sector Services
     */
    public function essIndex()
    {
        return view('pages.ess.index');
    }

    /**
     * ESS Engineering Services
     */
    public function essEs()
    {
        return view('pages.ess.es');
    }

    /**
     * ESS Consulting Services
     */
    public function essCs()
    {
        return view('pages.ess.cs');
    }

    /**
     * ESS Software Familiarity
     */
    public function essSf()
    {
        return view('pages.ess.sf');
    }

    /**
     * ESS Industry Codes and Standards
     */
    public function essIcs()
    {
        return view('pages.ess.ics');
    }

    /**
     * ESS Clients
     */
    public function essCli()
    {
        return view('pages.ess.cli');
    }

    /**
     * ESS Integrated Head Assembly
     */
    public function essIha()
    {
        return view('pages.ess.iha');
    }

    /**
     * ESS Projects
     */
    public function essProj()
    {
        return view('pages.ess.proj');
    }

    /**
     * Careers
     */
    public function careers()
    {
        return view('pages.careers.index');
    }

    /**
     * Job Postings
     */
    public function jobs()
    {
        return view('pages.careers.jobs');
    }

    /**
     * Benefits
     */
    public function benefits()
    {
        return view('pages.careers.benefits');
    }
    
    /**
     * Company
     */
    public function company()
    {
        return view('pages.company');
    }

    /**
     * Contact
     */
    public function contact()
    {
        return view('pages.contact');
    }

}
