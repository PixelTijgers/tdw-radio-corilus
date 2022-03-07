<?php

// Namespacing.
namespace app\Http\ViewComposers;

// Facades.
use Illuminate\View\View;

class LocalizationViewComposer
{
    public function compose(View $view)
    {
        // Check the current locale and set the other country flag.
        if(app()->getLocale() == 'nl')
            $countryFlag = 'fr';
        elseif(app()->getLocale() == 'fr')
            $countryFlag = 'nl';

        // Return view variable.
        $view->with('countryFlag', $countryFlag);
    }
}
