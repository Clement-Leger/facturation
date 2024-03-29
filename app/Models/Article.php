<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_name',
        'price_excl',
        'price_incl',
        'tax_rate',
        'supplier',
        'stock'
    ];

    public function categories(): BelongsToMany{
        return $this->belongsToMany(Category::class);
    }
}
