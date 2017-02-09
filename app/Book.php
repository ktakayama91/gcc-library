<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    /**
     * Get all of the loans for the book.
     */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
