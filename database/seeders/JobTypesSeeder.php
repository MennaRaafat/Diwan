<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'التأسيس',
            'الضرائب',
            'الحسابات وامساك الدفاتر',
            'المراجعة',
        ];

        foreach($types as $type){
            JobType::create([
                'name' => $type
            ]);
        }
    }
}
