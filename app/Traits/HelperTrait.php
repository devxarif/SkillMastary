<?php

namespace App\Traits;

trait HelperTrait {
    /*
    |--------------------------------------------------------------------------
    | Flash Helpers
    |--------------------------------------------------------------------------
    */

    /**
     * Response error flash message.
     *
     * @param  string  $msg
     * @return \Illuminate\Http\Response
    */
    function flashSuccess(string $message = 'Action completed successfully')
    {
        return toastr()->success($message, 'Success');
    }

    /**
     * Response error flash message.
     *
     * @param  string  $msg
     * @return \Illuminate\Http\Response
    */
    function flashError(string $message = 'Something went wrong')
    {
        return toastr()->error($message, 'Error');
    }

    /**
     * Response warning flash message.
     *
     * @param  string  $msg
     * @return \Illuminate\Http\Response
     */
    function flashWarning(string $message = 'Something went wrong')
    {
        return toastr()->warning($message, 'Warning');
    }
}
