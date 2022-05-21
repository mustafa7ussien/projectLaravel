<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Review;
use App\Team;
use App\Category;
use App\Product;
use App\Translatestaticdat;

class home extends Controller
{
    //

    public function index($lang)
    {
        \App::setLocale($lang);
        $service=Service::withTranslations()->get();
        // dd($service);
        $service= $service->translate( $lang,'fallbackLocale');
        

        //review
        $review=Review::withTranslations()->get();
        $review= $review->translate( $lang,'fallbackLocale');

          //team
          $team=Team::withTranslations()->get();
          $team= $team->translate( $lang,'fallbackLocale');

             //category
             $category=Category::withTranslations()->get();
             $category= $category->translate( $lang,'fallbackLocale');

              //product
              $product=Product::withTranslations()->get();
              $product= $product->translate( $lang,'fallbackLocale');

              //Translate static data
              $translatestaticdat=Translatestaticdat::withTranslations()->get();
              $translatestaticdat= $translatestaticdat->translate( $lang,'fallbackLocale');
            //   dd($translatestaticdat);

        return view("index",compact("service","review","team","category","product","translatestaticdat","lang"));
    }

    public function singleproject($id,$lang)
    {
        \App::setLocale($lang);
        $product=Product::withTranslations()->where("id",$id)->first();
        // dd($product);
        $product= $product->translate( $lang,'fallbackLocale');

        //translate static data
        $translatestaticdat=Translatestaticdat::withTranslations()->get();
        $translatestaticdat= $translatestaticdat->translate( $lang,'fallbackLocale');

        return view("singleproject",compact("lang","product","translatestaticdat"));
    }
}
