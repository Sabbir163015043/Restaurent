<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;

class RestaurentController extends Controller
{
    public function index ()
    {
        return view('front.home.home',[
            'foods' => Food :: OrderBy('id','desc')->get(),
            'categories' => Category ::where('status',1)->get()
        ]);
    }
    public function detail ($id)
    {
        return view('front.home.product-detail',[ 
        'foods' => Food :: where ('category_id', $id)->where('status',1)->rderBy('id','desc')->get()
        ]);
    }
    

    public function about ()
    {
        return view('front.home.about');
    }

    public function contact ()
    {
        return view('front.home.contact');
    }
}
