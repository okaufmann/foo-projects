<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'list_id', 'due_date'];

    protected $dates = ['due_date'];

    public function list()
    {
        return $this->belongsTo(TaskList::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
