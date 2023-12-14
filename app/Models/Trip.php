<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'auto_id',
        // Другие поля таблицы trips, добавьте сюда
    ];

    // Добавьте отношение к модели Auto, если необходимо
    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }
}
