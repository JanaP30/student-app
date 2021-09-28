<?php

namespace App\Console\Commands;

use App\Mail\TeacherEntered;
use App\Models\Grade;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailToTeacher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teacher:emails';

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
        $carentime=Carbon::now();
        $time_for_queru=$carentime->subHour();
        $grades=Grade::where('created_at', '>', $time_for_queru)->get();
        foreach ($grades as $grade) {
        Mail::to($grade->subject->teacher)->send(new TeacherEntered($grade->student, $grade, $grade->subject, $grade->subject->teacher));
        }
        

    }
}
