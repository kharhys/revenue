<?php

$serializer = new SuperClosure\Serializer;
return [

    'initialize' => $serializer->serialize(function ($authority) {
        $user = Auth::guest() ? new App\User : $authority->getCurrentUser();
        //$authority->allow('manage', 'all');
        if ($user->isMemberOf('System Administrators')) {
            $authority->allow('manage', 'App\Workflow');
        } else {
            //nothing
        }
    })

];
