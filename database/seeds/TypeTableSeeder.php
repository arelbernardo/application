<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Manila');
        DB::table('type')->truncate();
        DB::table('type_Details')->truncate();

        DB::table('type')->insert([
            [
                'name' => 'General',
                'description' => 'General',
                'created_at' => $now
            ],
            [
                'name' => 'Personal',
                'description' => 'Personal',
                'created_at' => $now
            ],
            [
                'name' => 'House',
                'description' => 'House',
                'created_at' => $now
            ],
            [
                'name' => 'Food & Drinks',
                'description' => 'Food & Drinks',
                'created_at' => $now
            ],
            [
                'name' => 'Transport',
                'description' => 'Transport',
                'created_at' => $now
            ],
            [
                'name' => 'Clothes',
                'description' => 'Clothes',
                'created_at' => $now
            ],
            [
                'name' => 'Fun',
                'description' => 'Fun',
                'created_at' => $now
            ],
            [
                'name' => 'Misc',
                'description' => 'Misc',
                'created_at' => $now
            ]
        ]);

        $type_details = [
            [],
            [
                [
                    'name' => 'Groceries',
                    'description' => 'Groceries'
                ],
                [
                    'name' => 'Mobile',
                    'description' => 'Mobile'
                ],
                [
                    'name' => 'Medical',
                    'description' => 'Medical'
                ],
                [
                    'name' => 'Taxes',
                    'description' => 'Taxes'
                ],
                [
                    'name' => 'Insurance',
                    'description' => 'Insurance'
                ],
                [
                    'name' => 'Personal Care',
                    'description' => 'Personal Care'
                ],
                [
                    'name' => 'Gadgets',
                    'description' => 'Gadgets'
                ],
                [
                    'name' => 'Pets',
                    'description' => 'Pets'
                ],
                [
                    'name' => 'Education',
                    'description' => 'Education'
                ],
                [
                    'name' => 'Laundry',
                    'description' => 'Laundry'
                ],
                [
                    'name' => 'Fitness',
                    'description' => 'Fitness'
                ],
                [
                    'name' => 'Loan',
                    'description' => 'Loan'
                ],
                [
                    'name' => 'Vouchers',
                    'description' => 'Vouchers'
                ],
                [
                    'name' => 'Subscriptions',
                    'description' => 'Subscriptions'
                ]
            ],
            [
                [
                    'name' => 'Rent',
                    'description' => 'Rent'
                ],
                [
                    'name' => 'Phone',
                    'description' => 'Phone'
                ],
                [
                    'name' => 'Electricity',
                    'description' => 'Electricity'
                ],
                [
                    'name' => 'Internet',
                    'description' => 'Internet'
                ],
                [
                    'name' => 'Cable',
                    'description' => 'Cable'
                ],
                [
                    'name' => 'Water',
                    'description' => 'Water'
                ],
                [
                    'name' => 'Repairs',
                    'description' => 'Repairs'
                ],
                [
                    'name' => 'Plants',
                    'description' => 'Plants'
                ],
                [
                    'name' => 'Electronics',
                    'description' => 'Electronics'
                ],
                [
                    'name' => 'Furniture',
                    'description' => 'Furniture'
                ],
                [
                    'name' => 'Heating',
                    'description' => 'Heating'
                ]
            ],
            [
                [
                    'name' => 'Snacks',
                    'description' => 'Snacks'
                ],
                [
                    'name' => 'Takeout',
                    'description' => 'Takeout'
                ],
                [
                    'name' => 'Fastfood',
                    'description' => 'Fastfood'
                ],
                [
                    'name' => 'Dining Out',
                    'description' => 'Dining Out'
                ],
                [
                    'name' => 'Cafe',
                    'description' => 'Cafe'
                ],
            ],
            [
                [
                    'name' => 'Train',
                    'description' => 'Train'
                ],
                [
                    'name' => 'Bus',
                    'description' => 'Bus'
                ],
                [
                    'name' => 'Gas',
                    'description' => 'Gas'
                ],
                [
                    'name' => 'Maintenance',
                    'description' => 'Maintenance'
                ],
                [
                    'name' => 'Public Transport',
                    'description' => 'Public Transport'
                ],
                [
                    'name' => 'Taxi',
                    'description' => 'Taxi'
                ],
                [
                    'name' => 'Insurance',
                    'description' => 'Insurance'
                ],
                [
                    'name' => 'Car Loan',
                    'description' => 'Car Loan'
                ],
                [
                    'name' => 'Penalty',
                    'description' => 'Penalty'
                ],
                [
                    'name' => 'Car Rental',
                    'description' => 'Car Rental'
                ],
                [
                    'name' => 'Flight',
                    'description' => 'Flight'
                ],
                [
                    'name' => 'Parking',
                    'description' => 'Parking'
                ]
            ],
            [
                [
                    'name' => 'Shoes',
                    'description' => 'Shoes'
                ],
                [
                    'name' => 'Clothes',
                    'description' => 'Clothes'
                ],
                [
                    'name' => 'Accessories',
                    'description' => 'Accessories'
                ],
                [
                    'name' => 'Underwear',
                    'description' => 'Underwear'
                ],
                [
                    'name' => 'Bags',
                    'description' => 'Bags'
                ]
            ],
            [
                [
                    'name' => 'Events',
                    'description' => 'Events'
                ],
                [
                    'name' => 'Movies',
                    'description' => 'Movies'
                ],
                [
                    'name' => 'Recreation',
                    'description' => 'Recreation'
                ],
                [
                    'name' => 'Cultural',
                    'description' => 'Cultural'
                ],
                [
                    'name' => 'Sports',
                    'description' => 'Sports'
                ],
                [
                    'name' => 'Books',
                    'description' => 'Books'
                ],
                [
                    'name' => 'Magazines',
                    'description' => 'Magazines'
                ],
                [
                    'name' => 'Music',
                    'description' => 'Music'
                ],
                [
                    'name' => 'Apps',
                    'description' => 'Apps'
                ],
                [
                    'name' => 'Software',
                    'description' => 'Software'
                ],
                [
                    'name' => 'TV Shows',
                    'description' => 'TV Shows'
                ]
            ],
            [
                [
                    'name' => 'Gift',
                    'description' => 'Gift'
                ],
                [
                    'name' => 'Office',
                    'description' => 'Office'
                ],
                [
                    'name' => 'Charity',
                    'description' => 'Charity'
                ],
                [
                    'name' => 'Lodging',
                    'description' => 'Lodging'
                ],
                [
                    'name' => 'Service',
                    'description' => 'Service'
                ],
                [
                    'name' => 'Toy',
                    'description' => 'Toy'
                ]
            ]
        ];

        $type = \App\Type::all();
        $i = 0;
        foreach($type as $data) {
            $id = $data->id;
            foreach($type_details[$i] as $details) {
                if($i != 0) {
                    DB::table('type_details')->insert([
                        [
                            'type_id' => $id,
                            'name' => $details['name'],
                            'description' => $details['description'],
                            'created_at' => $now
                        ]
                    ]);
                }
            }
            $i++;
        }
    }
}
