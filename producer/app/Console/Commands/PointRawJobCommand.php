<?php

namespace App\Console\Commands;

use App\Jobs\PointRawJob;
use Illuminate\Console\Command;

class PointRawJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pointraw:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=1'));
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=2'));
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=3&news_id=28'));
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=4&news_id=28&read_by=39'));
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=5&question_id=27'));
        dispatch(new PointRawJob('url?u_id=615&pt_rwd_id=6&vehicle_id=32'));
    }

}
