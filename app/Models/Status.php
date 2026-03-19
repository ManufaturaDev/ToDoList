<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Status extends Model
{
     use HasFactory, Notifiable;

     /**

     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'status';

     /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [ 
        'name',
    ]; 
}
