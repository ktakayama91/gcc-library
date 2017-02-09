<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //

    /**
     * Get the user that owns the loan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    *Get the book of the loan.
    */
    public function book()
    {
    	return $this->belongsTo(Book::class);
    }
}
