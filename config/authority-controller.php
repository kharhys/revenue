<?php

$serializer = new SuperClosure\Serializer;
return [

    'initialize' => $serializer->serialize(function ($authority) {
        $user = Auth::guest() ? new App\User : $authority->getCurrentUser();
        $authority->allow('manage', 'all');
        if ($user->hasRole('admin')) {
            $authority->allow('manage', 'App\User');
        } else {
            //nothing
        }
    })

];
