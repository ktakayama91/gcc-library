<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

	use SoftDeletes;
	protected $dates = ['deleted_at'];

    //

    /**
     * Get all of the loans for the book.
     */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
