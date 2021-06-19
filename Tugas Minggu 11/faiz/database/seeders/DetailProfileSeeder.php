<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('detail_profile')->insert([
        	'address'=>'Banyuwangi',
        	'nomor_tlp'=>'0895342221245',
        	'ttl'=>'2002-09-11',
        	'foto'=>'picture.png'
        	]);
    }
}
