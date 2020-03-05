<?php

namespace OwowAgency\UserRemoval\Http\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class ComparePassword implements Rule
{
    /**
     * The user to check the password for.
     *
     * @var \Illuminate\Foundation\Auth\User
     */
    private $user;

    /**
     * Create a new rule instance.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user ?? currentUser();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Hash::check($value, $this->user->getAuthPassword());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('userremoval::users.password_mismatch');
    }
}
