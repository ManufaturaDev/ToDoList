<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
     /**

     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'to_do_lists';

     /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [ 
        'title',
        'description',
        'expected_date',
        'status_id',
    ]; 

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
