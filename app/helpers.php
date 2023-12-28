<?php

/**
 * Authenticate user
 * @return mixed
 */
if (! function_exists('authUser')) {
    function authUser()
    {
        return auth('user')->user();
    }
}
