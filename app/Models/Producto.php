<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Producto extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    use HasFactory;
    // protected $table = 'products';
    // protected $primaryKey = 'id';
    // public $timestamps = false; // Si no quieres created_at/updated_at
    // protected $guarded = []; // Alternativa a $fillable (todos menos estos)
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'user_id'
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer'
    ];

    // protected $hidden = []; // Ocultar campos en JSON (ej: passwords)
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | CONSTANTS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
