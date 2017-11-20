<?php 

namespace App\Transformers;

Use App\user;

class UserTransformer extends \League\Fractal\TransformerAbstract
{

	public function transform(User $user)
	{
		return [

			'username' => $user->username,
			'avatar' => $user->avatar(),

		];
	}

}