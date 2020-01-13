<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateUUIDProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vk1ng:generate_uuid_products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate UUID for All Products';

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
     * @return mixed
     */
    public function handle()
    {
        //
        Product::whereNull('uuid')->chunk(1000, function ($products) {
            foreach ($products as $product) {
                $product->uuid = (string) Str::uuid();
                $product->save();
                $this->info("Done {$product->id}: {$product->uuid}");
            }
        });
    }
}
