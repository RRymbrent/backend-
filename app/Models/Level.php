<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    protected $fillable = ['category_id', 'name'];
    
    public function questions() {
        return $this->hasMany(Question::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}