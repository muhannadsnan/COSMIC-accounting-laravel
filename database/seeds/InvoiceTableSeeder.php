<?php

use Illuminate\Database\Seeder;
use App\Invoice;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Invoice::class, 30)->create();

        $inv = Invoice::find(1);
        $inv->_clients()->sync([3,5,7,9]);
        $inv->_materials()->sync([3,4,5,6,7,8,9]);
        $inv->_users()->sync([1,9]);
        $inv->_accounts()->sync([2,8]);
        $inv = Invoice::find(5);
        $inv->_clients()->sync([1,2,3,7]);
        $inv->_materials()->sync([3,5,7,9]);
        $inv->_users()->sync([5,9,20]);
        $inv->_accounts()->sync([8,9]);
    }
}