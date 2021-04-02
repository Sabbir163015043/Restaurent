<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        return view('admin.food.add',[
            'categories' => Category :: all(),
            
        ]);
    }

    public function manage()
    {
        return view('admin.food.manage',[
            'foods' => Food::all()
            ]);
    }

    public function new(Request $request)
    {

        $image   = $request->file('image');
        $imgName = $image->getClientOriginalName();
       
        $directory ='food-images/';
        $image ->move($directory, $imgName);
        $imgUrl = $directory.$imgName;

        $food = new Food();
        $food->category_id = $request->category_id;
        $food->tittle_name = $request->tittle_name;
        $food->full_description = $request->full_description;
        $food->price = $request->price;
        $food->image = $imgUrl;
        $food->status = $request->status;
        $food->save();


        return redirect()->back()-> with('message', 'Food Add Succesfully...');
    }
    public function view($id)
    {
        return view('admin.food.detail',[
            'food' => Food::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.food.edit',[
            'categories' => Category :: all(),
            'food' => Food::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $food = Food::find($request->id);
        if($image   = $request->file('image'))
        {
            if(file_exists($food->image))
            {
                unlink($food->image);
            }
            $imgName = $image->getClientOriginalName();
            $directory ='food-images/';
            $image ->move($directory, $imgName);
            $imgUrl = $directory.$imgName;
        }
        else
        {
            $imgUrl = $food->image;
        }

        $food->category_id = $request->category_id;
        $food->tittle_name = $request->tittle_name;
        $food->full_description = $request->full_description;
        $food->price = $request->price;
        $food->image = $imgUrl;
        $food->status = $request->status;
        $food->save();

        return redirect('/manage-food')-> with('message', 'Food Add Succesfully...');
       }

       public function delete($id)
       {
        $food = Food :: find($id);
        $food -> delete();

        return redirect('/manage-food')->with('message','Food Delete Successfully....');
       }
}









