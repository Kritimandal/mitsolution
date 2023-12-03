<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Post;
use App\Models\Technology;
use App\Http\Controllers\Controller;
use App\Models\BoardMember;
use App\Models\Projects;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banner = Banner::where('category_id', 1)->first();
        $subcategory = SubCategory::where('category_id', 1)->first();
        $clients = Client::take(5)->get();
        $clients2 = Client::skip(5)->take(5)->get();
        $testimonials = Testimonial::take(3)->get();
        $testimonials2 = Testimonial::skip(3)->take(3)->get();
        $technologies1 = Technology::where('tag_id', 1)->get();
        $technologies2 = Technology::where('tag_id', 2)->get();
        $technologies3 = Technology::where('tag_id', 3)->get();
        $technologies4 = Technology::where('tag_id', 4)->get();
        $projects = Projects::where('status', 1)->get();
        return view('frontend.homepage', [
            "banner" => $banner,
            "testimonials" => $testimonials,
            "testimonials2" => $testimonials2,
            "clients" => $clients,
            "clients2" => $clients2,
            "subcategory"=> $subcategory,
            "technologies1" => $technologies1,
            "technologies2" => $technologies2,
            "technologies3" => $technologies3,
            "technologies4" => $technologies4,
            "projects" => $projects,
            
        ]);
    }

    public function contact()
    {
        $banner = Banner::where('category_id', 5)->first();
        return view('frontend.contactUs', [
            "banner" => $banner
        ]);
    }
    public function about()
    {
        $banner = Banner::where('category_id', 2)->first();
        return view('frontend.aboutUs', [
            "banner" => $banner
        ]);
    }

    public function career()
    {
        $banner = Banner::where('category_id', 4)->first();
        $benefits = SubCategory::where('category_id', 10)->get();
        $joins = SubCategory::where('category_id', 11)->get();
        return view('frontend.career', [
            "banner" => $banner,
            "joins" => $joins,
            "benefits" =>$benefits,
        ]);
    }

    public function service()
    {
        $banner = Banner::where('category_id', 3)->first();
        $services = SubCategory::where('category_id', 3)->get();
        $services2 = SubCategory::where('category_id', 8)->get();
        $services3 = SubCategory::where('category_id', 9)->get();
        return view('frontend.ourService', [
            "services" => $services,
            "banner" => $banner,
            "service2" => $services2,
            "service3" => $services3
        ]);
    }
    public function team()
    {
        $banner = Banner::where('category_id', 6)->first();
        $boardmembers = BoardMember::where('board_member', 1)->get();
       $teams = BoardMember::where('board_member', '0')->get();
       
        return view('frontend.ourTeams', [
            "banner" => $banner,
            "boardmembers" => $boardmembers,
            "teams" => $teams
        ]);
    }
    public function client()
    {
        $banner = Banner::where('category_id', 7)->first();
        $clients = Client::take(5)->get();
        $services3 = SubCategory::where('category_id', 9)->get();
        return view('frontend.ourClients', [
            "banner" => $banner,
            "clients" => $clients,
            "service3"=>$services3
        ]);
    }

    public function post( Post $post )
    {
        
        return view('frontend.post', [
            "post" => $post,
        ]);
    }
}
