<?php

namespace App\Http\Controllers\Language;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function renderLanguage($language = 'vi')
    {
        if (! in_array($language, ['en', 'vi'])) {
            abort(404);
        }

        Session::put('language', $language);
//        \Artisan::call('config:clear');
//        \Artisan::call('config:cache');
        return redirect()->back();
    }
}
