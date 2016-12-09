<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Laptop;
use App\Loan;
use Carbon\Carbon;
use DB;

class Report extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test email';

    protected $laptop;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Laptop $laptop)
    {
        parent::__construct();

        $this->laptop = $laptop;
    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $laptops = Laptop::where('id', 2)->get();

       Mail::send('emails.report-laptop', ['laptops' => $laptops], function($message) use ($laptops) {
         $message->to('tejada.terrence@gmail.com', 'Asset Inventory')
                  ->subject('Loan Laptop Notification');
         $message->from('admin@assetinventory.com','Administrator');
      });

    }
}
