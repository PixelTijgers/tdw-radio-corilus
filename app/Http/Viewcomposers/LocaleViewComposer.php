<?php

// Namespacing.
namespace app\Http\ViewComposers;

// Facades.
use Illuminate\View\View;

class LocaleViewComposer
{
    public function compose(View $view)
    {
        // Check the current locale and set the other country flag.
        if(app()->getLocale() == 'nl')
            $language = 'fr';
        elseif(app()->getLocale() == 'fr')
            $language = 'nl';

        // Return view variable.
        $view->with('language', $language);
    }
}
