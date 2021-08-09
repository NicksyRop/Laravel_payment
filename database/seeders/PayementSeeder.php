<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PayementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([

            'name' => 'Paypal',
            'image' => 'images/payal.jpg'

        ]);
        PaymentPlatform::create([

            'name' => 'Stripe',
            'image' => 'images/stripe.jpg'

        ]);
    }
}
