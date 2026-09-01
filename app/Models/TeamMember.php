<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;
    protected $table = 'team_members';
    protected $fillable = ['name', 'role', 'description', 'image', 'status'];
}
