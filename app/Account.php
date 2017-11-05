<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function Patient()
    {
        return $this->belongsTo(Patient::class);

    }
}
