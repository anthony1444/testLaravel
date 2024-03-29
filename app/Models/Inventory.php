<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function articles()
    {
        return $this->belongsToMany(Article::class)->withPivot('quantity');
    }
}
