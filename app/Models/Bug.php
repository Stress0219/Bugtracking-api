<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bug
 * 
 * @property int $Id
 * @property int $Project_Id
 * @property int $User
 * @property string $Description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Project $project
 * @property User $user
 *
 * @package App\Models
 */
class Bug extends Model
{
	protected $table = 'bug';
	protected $primaryKey = 'Id';

	protected $casts = [
		'Project_Id' => 'int',
		'User' => 'int'
	];

	protected $fillable = [
		'Project_Id',
		'User',
		'Description'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'Project_Id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'User');
	}
}
