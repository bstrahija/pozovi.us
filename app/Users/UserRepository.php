<?php namespace App\Users;

use Auth, Hash;
use App\EloquentRepository;
use Laravel\Socialite\Two\User as SocialUser;

class UserRepository extends EloquentRepository
{
    /**
     * Eloquent model for repository
     *
     * @var string
     */
    protected $model = 'App\Users\User';

    /**
     * Create or update the user by data from a social network provider
     *
     * @param  \Laravel\Socialite\Two\User $socialUser
     * @return \App\Users\User
     */
    public function createOrUpdateFromSocial(SocialUser $socialUser)
    {
        $user = $this->where('email', $socialUser->email)->first();

        if ($user)
        {
            $user->update([
                'email'      => $socialUser->email,
                'first_name' => array_get($socialUser->user, 'first_name'),
                'last_name'  => array_get($socialUser->user, 'last_name'),
            ]);
        }
        else
        {
            $user = $this->create([
                'email'      => $socialUser->email,
                'password'   => bcrypt(uniqid()),
                'first_name' => array_get($socialUser->user, 'first_name'),
                'last_name'  => array_get($socialUser->user, 'last_name'),
            ]);
        }

        return $user;
    }
}
