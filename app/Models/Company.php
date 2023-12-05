<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';
    protected $fillable = [
        'name',
        'address',
        'email',
        'image',
        'website',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
