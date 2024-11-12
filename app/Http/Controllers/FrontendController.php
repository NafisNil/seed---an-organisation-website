<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\About;
use App\Models\Logo;
use App\Models\General;
use App\Models\Social;
use App\Models\Focus;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Team;

class FrontendController extends Controller
{
    //
    public function index(){
        $hero = Hero::get();
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $mission = Mission::first();
        $vision = Vision::first();
        $events = Event::orderBy('id','desc')->get();
        $partner = Partner::orderBy('id','desc')->get();
        $blogFirst = Blog::orderBy('id','desc')->first();
        $testimonial = Testimonial::orderBy('id','desc')->limit(3)->get();
        return view('frontend.index',['hero'=>$hero, 'logo'=> $logo, 'general'=> $general,'social'=> $social, 'mission'=> $mission, 'vision'=>$vision, 'events'=> $events, 'blogFirst'=>$blogFirst,'testimonial' => $testimonial, 'partner'=> $partner]);
    }

    public function about(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $about = About::first();
        $mission = Mission::first();
        $vision = Vision::first();
        return view('frontend.about_us',['logo'=> $logo, 'general'=> $general,'social'=> $social, 'mission'=> $mission, 'vision'=>$vision, 'about'=> $about]);
    }

    public function team(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $team = Team::where('category', 'Team')->get();

        return view('frontend.team_member',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'team'=> $team]);
    }

    public function advisory(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $team = Team::where('category', 'Advisory')->get();

        return view('frontend.advisory_member',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'team'=> $team]);
    }

    public function focus_point(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $focus = Focus::get();

        return view('frontend.focus_point',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'focus'=> $focus]);
    }

    public function event_all(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $events = Event::orderBy('id','desc')->paginate(8);

        return view('frontend.event_all',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'events'=> $events]);
    }

    public function event_single($id){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $event = Event::where('id',$id)->first();

        return view('frontend.single_event',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'event'=> $event]);
    }

    public function blog_all(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $blogs = Blog::orderBy('id','desc')->paginate(8);

        return view('frontend.blog_all',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'blogs'=> $blogs]);
    }

    public function blog_single($id){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
        $blog = Blog::where('id',$id)->first();

        return view('frontend.single_blog',['logo'=> $logo, 'general'=> $general,'social'=> $social,  'blog'=> $blog]);
    }

    public function contact_us(){
        $logo = Logo::first();
        $general = General::first();
        $social = Social::first();
     

        return view('frontend.contact-us',['logo'=> $logo, 'general'=> $general,'social'=> $social]);
    }



}
