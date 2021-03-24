<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use App\Domain\Country;

class State extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=['name','country_id'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
