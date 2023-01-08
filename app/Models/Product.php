<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory, SoftDeletes;
  //可変項目
  protected $fillable = [
    'product_name',
    'price',
    'image',
    'stock',
    'description',
    'brand',
    'category',
    'use_scene',
    'deleted_at',
    'updated_at'
  ];

}
