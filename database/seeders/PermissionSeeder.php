<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'name' => 'permission',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'permission_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'permission_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'permission_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'role',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'role_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'role_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'role_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'service',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'service_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'service_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'service_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'project',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'project_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'project_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'project_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
        'name' => 'blog',
        'guard_name' => 'web',
        'parrent_id' => 0,
        'main' => 1,
    ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'blog_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'blog_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'blog_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'post',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'post_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'post_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'post_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'team_member',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'team_member_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'team_member_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'team_member_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'email',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'email_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'email_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'email_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);

        $data = [
            'name' => 'users',
            'guard_name' => 'web',
            'parrent_id' => 0,
            'main' => 1,
        ];
        $main = Permission::create($data);
        Permission::insert([
            [
                'name' => 'users_create',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'users_edit',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
            [

                'name' => 'users_delete',

                'guard_name' => 'web',

                'main' => 0,

                'created_at' => \Carbon\Carbon::now(),

                'updated_at' => \Carbon\Carbon::now(),

                'parrent_id' => $main->id,

            ],
        ]);


    }
}
