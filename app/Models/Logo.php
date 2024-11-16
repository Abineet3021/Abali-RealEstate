<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Logo extends Model
{
    use HasApiTokens ,HasFactory;
    
    public $table = 'logo';
    
    protected $fillable=['image'];
}