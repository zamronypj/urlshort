<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	protected $primaryKey='short_url';
    public $timestamps = false;
	public $incrementing = false; 
}
