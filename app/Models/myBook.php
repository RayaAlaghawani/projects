<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\crudBook;
use App\Models\User;

class myBook extends Model
{

    protected $fillable = [
        'userId',
        'bookId',
        'status',
        'pageRead',
        'totalMinutesRead'
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsTo(crudBook::class);
    }

    use HasFactory;
}
