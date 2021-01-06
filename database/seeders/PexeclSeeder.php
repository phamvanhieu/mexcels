<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PexeclSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6 ; $i++) { 
            DB::table('pexcels')->insert([
                'user_id' => $i,
                'pexcel_from' => 'A' . $i,
                'pexcel_to' => 'B' . $i,
                'pexcel_values' => '[A'. $i . ' , B' . $i . ']',
                'pexcel_name' => 'Bài '.$i.': Giới thiệu Laravel '.($i - 1),
                'pexcel_overview' => $i.' Only the following column types can be',
                'pexcel_description' => $i.'<p> Only the following column types can be "changed": bigInteger, binary, boolean, date, dateTime, dateTimeTz, decimal, integer,</p>',
                'pexcel_slug' => 'Bai-'.$i.'-Gioi-thieu-Laravel',
                'pexcel_image' => '/photos/9999'.$i.'/test/5ab1cee1a4aa4.jpeg',
                'pexcel_files' => '["\/files\/'.$i.'\/abc\/5ab3285de870c.pdf"]',
                'pexcel_status' => 99,
            ]);
        }
    }
}
