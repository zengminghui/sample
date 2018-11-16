<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /** 定义可写字段 */
    protected $fillable = ['content'];
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
