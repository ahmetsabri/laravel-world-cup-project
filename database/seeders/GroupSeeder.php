<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            'E' => [
                'Japan',
                'Spain',
                'Germany',
                'Costa Rica'
            ],
            'A' => [
                'Netherland',
                'Ecuador',
                'Senegal',
                'Qatar'
            ]
        ];

        foreach ($groups as $group=>$teams) {
            $groupModel = Group::updateOrCreate(['name'=>$group]);

            foreach ($teams as $team) {
                $groupModel->teams()->create(['name'=>$team]);
            }
        }
    }
}
