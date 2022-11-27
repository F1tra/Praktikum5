<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createRolesSeeder extends Seeder
{
    public function run()
    {
        $Roles=[
        [
            'id' =>1,
            'name' =>'Admin',
        ],
        [
            'id' =>2,
            'name' =>'User',
        ]
        ];
        foreach($roles as $key =>$role){
            Role:: Create($role);
        }
    }
}