<?php

/*
|--------------------------------------------------------------------------
| Authentication Helpers
|--------------------------------------------------------------------------
*/

/**
 * Authenticate check
 * @return mixed
 */
if (! function_exists('authCheck')) {
    function authCheck($guard = 'user')
    {
        return auth($guard)->check();
    }
}

/**
 * Authenticate user
 * @return mixed
 */
if (! function_exists('authUser')) {
    function authUser($guard = 'user')
    {
        return auth($guard)->user();
    }
}




/*
|--------------------------------------------------------------------------
| Setting Helpers
|--------------------------------------------------------------------------
*/






/*
|--------------------------------------------------------------------------
| Flash Helpers
|--------------------------------------------------------------------------
*/

/**
 * Response success flash message.
 *
 * @return \Illuminate\Http\Response
 */
if (! function_exists('flashSuccess')) {
    function flashSuccess(string $message = 'Action completed successfully')
    {
        return toastr()->success($message, 'Success');
    }
}

/**
 * Response error flash message.
 *
 * @param  string  $msg
 * @return \Illuminate\Http\Response
 */
if (! function_exists('flashError')) {
    function flashError(string $message = 'Something went wrong')
    {
        return toastr()->error($message, 'Error');
    }
}

/**
 * Response warning flash message.
 *
 * @param  string  $msg
 * @return \Illuminate\Http\Response
 */
if (! function_exists('flashWarning')) {
    function flashWarning(string $message = 'Something went wrong')
    {
        return toastr()->warning($message, 'Warning');
    }
}




/*
|--------------------------------------------------------------------------
| Reusable Helpers
|--------------------------------------------------------------------------
*/





