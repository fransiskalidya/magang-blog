<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'isi',
        'category_id',
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
