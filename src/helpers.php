<?php

if (! function_exists('currentUser')) {
    /**
     * Return the current user.
     */
    function currentUser()
    {
        return \Illuminate\Support\Facades\Auth::user();
    }
}
