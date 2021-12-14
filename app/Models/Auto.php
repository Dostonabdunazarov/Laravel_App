<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Auto extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at', 'date_auto'];
    public $timestamps = false;
    protected $casts = [
        'created_at' => 'datetime'
    ];
    protected $fillable = [
        'photo_auto',
        'model_auto',
        'mark_auto',
        'km_auto',
        'date_auto',
        'color',
        ];
    /**
     * @var mixed
     */
    private $user_id;

    protected static function booted() {
        static::created(function ($auto) {
            $auto->user_id = Auth::user()->id;
        });
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
