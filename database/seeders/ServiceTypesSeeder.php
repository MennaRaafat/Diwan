<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceType;

class ServiceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'اعداد القائمة المالية',
            'المراجعة والتدقيق',
            'اداره الضرائب والقرارات',
            'اعداد دراسة الجدوى',
            'الاستشارات المالية والمحاسبية',
            'خدمات اخرى'
        ];

        foreach($types as $type){
            ServiceType::create([
                'name' => $type
            ]);
        }
    }
}
