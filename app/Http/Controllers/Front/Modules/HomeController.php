<?php

// Controller namespacing.
namespace App\Http\Controllers\Front\Modules;
use App\Http\Controllers\Controller;

// Facades.

// Models.

// Traits

class HomeController extends Controller
{
    /**
    * Traits
    *
    */

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // Init view.
        return view('front.modules.home.index');
    }

    /**
    * Change app language.
    *
    * @return \Illuminate\Http\Response
    */
    public function changeLanguage($language)
    {
        if (array_key_exists($language, \Config::get('cms.common.settings.app_locales'))) {
            request()->session()->put('locale', $language);
        }
        return \Redirect::back();
    }
}
