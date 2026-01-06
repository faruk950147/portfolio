<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    //HomeView
    public function homeView(){
        return view('frontend.home');
    }
    //AboutView
    public function aboutView(){
        return view('frontend.about');
    }
    //ResumeView
    public function resumeView(){
        return view('frontend.resume');
    }
    //ServicesView
    public function servicesView(){
        return view('frontend.services');
    }
    //ServiceDetailView
    public function serviceDetailView(){
        return view('frontend.services-detail');
    }
    //PortfolioView
    public function portfolioView(){
        return view('frontend.portfolio');
    }
    //PortfolioDetailView
    public function portfolioDetailView(){
        return view('frontend.portfolio-detail');
    }
    //ContactView
    public function contactView(){
        return view('frontend.contact');
    }

}
