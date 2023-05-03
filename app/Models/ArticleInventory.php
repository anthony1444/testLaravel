<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleInventory extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
