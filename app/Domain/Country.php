<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use State;

class Country extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=['code','name'];

    public function states(){
        return $this->hasMany(State::class);
    }
}
