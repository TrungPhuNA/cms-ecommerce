<?php

namespace App\Console\Commands\Crawler;

use App\Models\System\Bank;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CrawlerPaymentCardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:card';

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
        $this->info("init --crawler card");
        $path = "https://solutionseeking.com/wp-content/uploads/2018/09/bankList.txt";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $card) {
            foreach ($card['bankList'] as $item) {
                $data = [
                    'b_code' => $item['MaNganHang'],
                    'b_name' => $item['TenNH'],
                    'created_at' => Carbon::now()
                ];

                Bank::insert($data);

            }
        }
    }
}
