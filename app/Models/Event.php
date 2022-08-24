<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $appends = ['month', 'day', 'date'];

    public function getMonthAttribute(){
        return Carbon::parse($this->getAttribute('start_date'))->format('M');
    }

    public function getDayAttribute(){
        return Carbon::parse($this->getAttribute('start_date'))->format('d');
    }

    public function getDateAttribute(){
        return Carbon::parse($this->getAttribute('start_date'))->format('l');
    }
}
