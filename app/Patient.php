<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function Account()
    {
        return $this->hasMany(Account::class);

    }
}
