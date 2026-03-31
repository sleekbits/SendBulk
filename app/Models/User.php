<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable { use HasRoles; protected $fillable=['name','email','password','is_active']; protected $hidden=['password','remember_token']; }
