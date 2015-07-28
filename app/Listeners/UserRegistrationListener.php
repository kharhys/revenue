<?php

namespace App\Listeners;

use App\Account;

class UserRegistrationListener
{
    public function handle($user)
    {
        if($user->agent_account_id == null) {
          $account = Account::create(['name' => $user->name, 'type' => 'personal']);

          $user->agentAccount()->associate($account);
          $user->personalAccount()->associate($account);
          $user->accounts()->save($account);
          $user->save();
        }
    }
}
