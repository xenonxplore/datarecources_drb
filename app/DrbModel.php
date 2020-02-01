<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DrbModel extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function discount( $monthly, $yearly )
    {
        $discount = (($monthly - ($yearly / 12)) * 100) / $monthly;

        return $discount;
        
    }
}
