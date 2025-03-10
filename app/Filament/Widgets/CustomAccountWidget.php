<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;



class CustomAccountWidget extends Widget
{
    protected static string $view = 'filament.widgets.custom-account-widget';
   // protected int |string |array $columnSpan = 'full';

   public function getUserAvatarUrl(): string
{
    $user = Auth::user();
    
    return $user && $user->profile_image
        ? asset('storage/profile_images/' . $user->profile_image)
        : asset('images/logo.jpg'); 

    
}

}
