<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class c_rod_type
 * @package App\Models
 * @property integer id
 * @property string issue
 * @property string description
 * @property string status
 */
class Issue extends Model
{
    use HasFactory;

    public $timestamps = false;
}
