<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorStatistic extends Model
{
    protected $fillable = ['ip_address', 'page', 'user_agent', 'visited_at'];
}
