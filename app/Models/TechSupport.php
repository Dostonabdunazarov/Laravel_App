<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechSupport extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tech_supports';
    protected $date = ['date_tech_supp'];
    protected $casts = [
        'date_tech_supp' => 'date'
    ];
    protected $fillable = ['date_tech_supp', 'type_tech_supp', 'km_auto'];

    public function autos() {
        return $this->hasMany(Auto::class);
    }
    public function users() {
        return $this->belongsTo(User::class);
    }
}
