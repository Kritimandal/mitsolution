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
use App\Models\Setting;
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
        $setting = Setting::first();
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
            "subcategory" => $subcategory,
            "technologies1" => $technologies1,
            "technologies2" => $technologies2,
            "technologies3" => $technologies3,
            "technologies4" => $technologies4,
            "projects" => $projects,
            "setting" => $setting,

        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 5)->first();
        return view('frontend.contactUs', [
            "banner" => $banner,
            "setting" => $setting
        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 2)->first();
        return view('frontend.aboutUs', [
            "banner" => $banner,
            "setting" => $setting
        ]);
    }

    public function career()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 4)->first();
        $benefits = SubCategory::where('category_id', 10)->get();
        $joins = SubCategory::where('category_id', 11)->get();
        return view('frontend.career', [
            "banner" => $banner,
            "joins" => $joins,
            "benefits" => $benefits,
            "setting" => $setting,
        ]);
    }

    public function service()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 3)->first();
        $services = SubCategory::where('category_id', 3)->get();
        $services2 = SubCategory::where('category_id', 8)->get();
        $services3 = SubCategory::where('category_id', 9)->get();
        return view('frontend.ourService', [
            "services" => $services,
            "banner" => $banner,
            "service2" => $services2,
            "service3" => $services3,
            "setting" => $setting,
        ]);
    }
    public function team()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 6)->first();
        $boardmembers = BoardMember::where('board_member', 1)->get();
        $teams = BoardMember::where('board_member', '0')->get();

        return view('frontend.ourTeams', [
            "banner" => $banner,
            "boardmembers" => $boardmembers,
            "teams" => $teams,
            "setting" => $setting,
        ]);
    }
    public function client()
    {
        $setting = Setting::first();
        $banner = Banner::where('category_id', 7)->first();
        $clients = Client::take(5)->get();
        $services3 = SubCategory::where('category_id', 9)->get();
        return view('frontend.ourClients', [
            "banner" => $banner,
            "clients" => $clients,
            "service3" => $services3,
            "setting" => $setting,
        ]);
    }

    public function post(Post $post)
    {
        if ($post->status == '1') {
            return view('frontend.post', [
                "post" => $post,
            ]);
        } else {
            abort(404);
        }
    }
    public function categorypost(Post $post)
    {
        $setting = Setting::first();
        $meta_title = $post->SubCategory->category->meta_title;
        $meta_keywords = $post->SubCategory->category->meta_keywords;
        $meta_description = $post->SubCategory->category->meta_description;
        $posts = Post::where('sub_category_id', $post->sub_category_id)
            ->where('status', '1')
            ->orderBy('priority')
            ->take(6)
            ->get();
        return view('frontend.categorypost', [
            "posts" => $posts,
            "setting" => $setting,
            "meta_title" => $meta_title,
            "meta_description" => $meta_description,
            "meta_keywords" => $meta_keywords,
        ]);
    }
}
