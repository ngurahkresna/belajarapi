<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\DesignerController;

class Designer extends Model
{
    use HasFactory;

    protected $table = 'designers';
}
