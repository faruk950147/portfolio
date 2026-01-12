<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    //HomeView
    public function homeView(){
        return view('frontend.pages.home');
    }
    //AboutView
    public function aboutView(){
        return view('frontend.pages.about');
    }
    //ResumeView
    public function resumeView(){
        return view('frontend.pages.resume');
    }
    //ServicesView
    public function servicesView(){
        return view('frontend.pages.services');
    }
    //ServiceDetailView
    public function serviceDetailView(){
        return view('frontend.pages.services-detail');
    }
    //PortfolioView
    public function portfolioView(){
        return view('frontend.pages.portfolio');
    }
    //PortfolioDetailView
    public function portfolioDetailView(){
        return view('frontend.pages.portfolio-detail');
    }
    //ContactView
    public function contactView(){
        return view('frontend.pages.contact');
    }

}
