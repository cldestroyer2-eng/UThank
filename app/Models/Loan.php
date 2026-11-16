<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function debtor()
    {
        return $this->belongsTo(Debtor::class);
    }
        public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
