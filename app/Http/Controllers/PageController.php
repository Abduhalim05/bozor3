<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Announ;
use App\Models\Info;
use App\Models\OpenData;
use App\Models\Product;
use App\Models\Rasta;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $sliders=Slider::all();

        $about=About::first();

        $rasta=Rasta::all();

        $products=Product::all();

        $announ=Announ::all();

        $contact_item=Info::first();



        return view('welcome', compact('sliders', 'about', 'rasta','products', 'announ', 'contact_item'));
    }

    public function announ($id)
    {
        $item=Announ::find($id);
        return view('pages.announ', compact('item'));
    }

    public function opendata()
    {
        $items=OpenData::paginate(2);
        return view('pages.opendata', compact('items'));
    }

    public function search(Request $request){

        $key=$request->key;
        $posts = Product::query()
        ->where('name', 'LIKE', "%".$key."%")
        ->orWhere('description', 'LIKE', "%".$key."%")
        ->paginate(2);

        return view('pages.searchPage', compact('posts', 'key'));
    }

}
