<?php

use Carbon\Carbon;
use Illuminate\Support\Number;

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
    function flashError(string $message = 'Something went wrong', $login = false)
    {
        if ($login) {
            $login_route = route('website.login');
            $login_msg = "<br> <a class='text-decoration-underline fw-bold' href='{$login_route}'>Login Now</a>";
            $message .= $login_msg;
        }

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



/*
|--------------------------------------------------------------------------
| Format Helpers
|--------------------------------------------------------------------------
*/
if (! function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d')
    {
        return Carbon::parse($date)->format($format);
    }
}

if (! function_exists('formatDateTime')) {
    function formatDateTime($date, $format = 'Y-m-d')
    {
        if ($date) {
            return Carbon::createFromFormat($format, $date);
        }

        return null;
    }
}

function formatNumber($numbers, $precision = 2)
{
    if (!$numbers || !is_numeric($numbers)) return $numbers;

    return Number::abbreviate($numbers, $precision);
};




