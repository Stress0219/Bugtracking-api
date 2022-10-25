<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $Id
 * @property string $Name
 * @property string $Description
 * 
 * @property Collection|Bug[] $bugs
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'project';
	protected $primaryKey = 'Id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'Id' => 'int'
	];

	protected $fillable = [
		'Name',
		'Description'
	];

	public function bugs()
	{
		return $this->hasMany(Bug::class, 'Project_Id');
	}
}
