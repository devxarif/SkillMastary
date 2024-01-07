<?php

use Carbon\Carbon;

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

function formatNumber($n)
{
    if (!$n || !is_numeric($n) || $n < 1000) return $n;

    $suffix = ['','k','M','G','T','P','E','Z','Y'];
    $power = floor(log($n, 1000));

    return round($n/(1000**$power),1,PHP_ROUND_HALF_EVEN).$suffix[$power];
};




