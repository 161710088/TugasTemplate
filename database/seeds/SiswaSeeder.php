<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
            ['nis'=>'1','nama'=>'Ahmad Fauzi S','tempatlahir'=>'bandung','tanggallahir'=>'2001-03-12','alamat'=>'Sompok Regency','citacita'=>'Programmer','hobi'=>'foto orang','foto'=>'1.jpg']
            
        ];
        DB::table('siswas')->insert($a);
    }
}
