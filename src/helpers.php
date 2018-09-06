<?php

if (! function_exists('currentUser')) {
    /**
     * Return the current user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    function currentUser()
    {
        return \Illuminate\Support\Facades\Auth::user();
    }
}
