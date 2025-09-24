<?php
namespace App\Console\Commands;

use App\Mail\WelcomeMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $msg     = 'Hello Daud Taiyab';
        $subject = 'Welcome Message';
        Mail::to('laraveldevdaud@gmail.com')->send(new WelcomeMail($msg, $subject));

        $this->info('Mail sent successfully.');
    }
}