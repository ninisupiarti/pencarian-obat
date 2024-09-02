<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'registration_number',
        'dose',
        'composition',
        'indication',
        'description',
        'adverse_drug_reaction',
        'tags',
        'drug_classification_id',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getTagsModelsAttribute()
    {
        return Tag::whereIn('id', $this->tags)->get();
    }

    public function drugClassification()
    {
        return $this->belongsTo(DrugClassification::class, 'drug_classification_id');
    }

    public static function search($query)
    {
        return self::whereRaw("MATCH(name, composition, description) AGAINST(? IN BOOLEAN MODE)", [$query]);
    }
}
