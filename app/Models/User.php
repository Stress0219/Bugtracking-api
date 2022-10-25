<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $Id
 * @property string $Name
 * @property string $Surname
 * 
 * @property Collection|Bug[] $bugs
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'Id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int'
	];

	protected $fillable = [
		'Name',
		'Surname'
	];

	public function bugs()
	{
		return $this->hasMany(Bug::class, 'User');
	}
}
