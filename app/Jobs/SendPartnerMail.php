<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPartnerMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($arr)
    {
        $this->data = $arr;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $email = 'Order@darkwinginflight.com';
        $email = 'harbecox@gmail.com';
        Mail::send('mail.partner',$this->data,function ($message) use ($email){
            $message->to($email)->subject
            ('Darkwings Partner');
        });
    }
}
