<?php

namespace App\Http\Controllers;

use App\Jobs\PingJob;
class SendTaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function __invoke()
    {
        dispatch(new PingJob('test'));

        return true;
    }

    //
}
