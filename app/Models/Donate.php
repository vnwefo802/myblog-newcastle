<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    protected $fillable =  ['donate_title', 'donate_first_short_title', 'donate_second_short_title',
'donate_project_title', 'donate_first_project__short_title', 'donate_first_project__long_description', 
'donate_second_project__long_description', 'donate_objectives__title', 'donate_first__Objectives__description', 'donate_second__Objectives__description', 'donate_third__Objectives__description', 'donate_fourth__Objectives__description', 'donate_fifth__Objectives__description', 'donate_sixth__Objectives__description', 
'donate_values_title', 'donate_first__Values__description', 'donate_second__Values__description', 'donate_third__Values__description',
'donate_fourth__Values__description', 'donate_fifth__Values__description'];
}

