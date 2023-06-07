<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrower;

class BorrowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Borrower::create([
            'last_name' => 'DE SANTOS',
            'first_name' => 'TEODORO ROMMEL',
            'middle_name' => 'MARCA',
            'tin_id' => '12345678',
            'nature_of_business' => 'services',
            'house_no_street_subdivision' => 'Bldg 25 Unit 20',
            'barangay' => '176',
            'municipality' => 'CALOOCAN',
            'province' => 'NCR',
            'years_operating' => '5',
            'branch' => 'HO',
            'agent' => "MARDE MACALANDA",
            'credit_limit' => 20000,
        ]);

        Borrower::create([
            'last_name' => 'DAGALEA',
            'first_name' => 'MARITES MAY',
            'middle_name' => 'DAAROL',
            'tin_id' => '12345679',
            'nature_of_business' => 'services',
            'house_no_street_subdivision' => 'Bldg 25 Unit 20',
            'barangay' => '176',
            'municipality' => 'CALOOCAN',
            'province' => 'NCR',
            'years_operating' => '5',
            'branch' => 'HO',
            'agent' => "MARDE MACALANDA",
            'credit_limit' => 20000,
        ]);
    }
}
