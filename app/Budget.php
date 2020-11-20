<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';

    protected $fillable = ['client', 'seller', 'description', 'price', 'created_at'];

    public function getPriceFormatedAttribute() 
    {
        return number_format($this->price, 2, ',', '.');
    }

    public function getCreatedAtFormatedAttribute() 
    {
        return date_format($this->created_at, 'd/m/Y H:i');
    }

    public function getUpdatedAtFormatedAttribute() {
        return date_format($this->updated_at, 'd/m/Y H:i');
    }

    public function setPriceAttribute($value) 
    {
        $this->attributes['price'] = str_replace(',', '.', str_replace('.', '', $value));
    }
}
