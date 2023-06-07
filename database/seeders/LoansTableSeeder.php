<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loan::create([
            'document_no' => "HO-2022-000001",
            'borrower' => "DE SANTOS, TEODORO ROMMEL MARCA",
            'amount' => 10000,
            'total_balance' => 9000,
            'outstanding_balance' => 0,
            'receivable' => 12000,
            'total_payment' => 3000,
            'short_over' => 0,
            'date_released' => "2022-06-06",
            'payment_start_date' => "2022-06-06",
            'maturity_date' => "2022-09-06",
            'payment_date' => "2022-06-06",
            'penalty' => 0,
            'penalty_balance' => 5,
            'contact_numbers' => "09624343242",
            'loan_description' => "delinquent",
            'loan_status' => "delinquent",
            'type' => "Business Loan",
            'terms' => "17",
            'frequency' => "weekly",
            'agent' => "MARDE MACALANDA",
            'interest_rate' => 20,
        ]);

        Loan::create([
            'document_no' => "HO-2022-000002",
            'borrower' => "DAGALEA, MARITES MAY DAAROL",
            'amount' => 20000,
            'total_balance' => 21000,
            'outstanding_balance' => 0,
            'receivable' => 24000,
            'total_payment' => 3000,
            'short_over' => 0,
            'date_released' => "2022-06-06",
            'payment_start_date' => "2022-06-06",
            'maturity_date' => "2022-09-06",
            'payment_date' => "2022-06-06",
            'penalty' => 10,
            'penalty_balance' => 0,
            'contact_numbers' => "09624343242",
            'loan_description' => "open",
            'loan_status' => "open",
            'type' => "OR/CR Loan",
            'terms' => "17",
            'frequency' => "weekly",
            'agent' => "MARDE MACALANDA",
            'interest_rate' => 20,
        ]);

        Loan::create([
            'document_no' => "HO-2022-000003",
            'borrower' => "DELA CRUZ, JUAN DAAROL",
            'amount' => 20000,
            'total_balance' => 0,
            'outstanding_balance' => 0,
            'receivable' => 24000,
            'total_payment' => 24000,
            'short_over' => 0,
            'date_released' => "2022-06-06",
            'payment_start_date' => "2022-06-06",
            'maturity_date' => "2022-09-06",
            'payment_date' => "2022-06-06",
            'penalty' => 10,
            'penalty_balance' => 0,
            'contact_numbers' => "09624343242",
            'loan_description' => "open",
            'loan_status' => "closed",
            'type' => "OR/CR Loan",
            'terms' => "17",
            'frequency' => "weekly",
            'agent' => "MARDE MACALANDA",
            'interest_rate' => 20,
        ]);
    }
}
