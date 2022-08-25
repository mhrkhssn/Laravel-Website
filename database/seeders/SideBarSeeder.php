<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sidebar;

class SideBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {

            $data = [
                'title' => 'Dashboard',
                'icon' => 'icon',
                'route_name' => 'dashboard',
                'url' => '/admin/dashboard',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);

            $data = [
                'title' => 'Excel File',
                'icon' => 'icon',
                'route_name' => 'file',
                'url' => '/admin/file',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);


            $data = [
                'title' => 'Permissions',
                'icon' => 'icon',
                'route_name' => 'permissions.index',
                'url' => '/admin/permissions',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Permissions',
                    'icon' => 'icon',
                    'route_name' => 'permissions.index',
                    'url' => '/admin/permissions',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Permission',
                    'icon' => 'icon',
                    'route_name' => 'permissions.create',
                    'url' => '/admin/permissions',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Roles',
                'icon' => 'icon',
                'route_name' => 'roles.index',
                'url' => '/admin/roles',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Roles',
                    'icon' => 'icon',
                    'route_name' => 'roles.index',
                    'url' => '/admin/roles',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Role',
                    'icon' => 'icon',
                    'route_name' => 'roles.create',
                    'url' => '/admin/roles',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Categories',
                'icon' => 'icon',
                'route_name' => 'categorys.index',
                'url' => '/admin/categorys',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Categories',
                    'icon' => 'icon',
                    'route_name' => 'categorys.index',
                    'url' => '/admin/categorys',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Category',
                    'icon' => 'icon',
                    'route_name' => 'categorys.create',
                    'url' => '/admin/categorys',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Sub Categories',
                'icon' => 'icon',
                'route_name' => 'sub_categorys.index',
                'url' => '/admin/sub_categorys',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Sub Categories',
                    'icon' => 'icon',
                    'route_name' => 'sub_categorys.index',
                    'url' => '/admin/sub_categorys',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Sub Category',
                    'icon' => 'icon',
                    'route_name' => 'sub_categorys.create',
                    'url' => '/admin/sub_categorys',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Posts',
                'icon' => 'icon',
                'route_name' => 'posts.index',
                'url' => '/admin/posts',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Posts',
                    'icon' => 'icon',
                    'route_name' => 'posts.index',
                    'url' => '/admin/posts',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Post',
                    'icon' => 'icon',
                    'route_name' => 'posts.create',
                    'url' => '/admin/posts',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'News',
                'icon' => 'icon',
                'route_name' => 'news.index',
                'url' => '/admin/news',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'News',
                    'icon' => 'icon',
                    'route_name' => 'news.index',
                    'url' => '/admin/news',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create News',
                    'icon' => 'icon',
                    'route_name' => 'news.create',
                    'url' => '/admin/news',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Books',
                'icon' => 'icon',
                'route_name' => 'books.index',
                'url' => '/admin/books',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Books',
                    'icon' => 'icon',
                    'route_name' => 'books.index',
                    'url' => '/admin/books',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Book',
                    'icon' => 'icon',
                    'route_name' => 'books.create',
                    'url' => '/admin/books',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Galleries',
                'icon' => 'icon',
                'route_name' => 'galleries.index',
                'url' => '/admin/galleries',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Galleries',
                    'icon' => 'icon',
                    'route_name' => 'galleries.index',
                    'url' => '/admin/galleries',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Gallery',
                    'icon' => 'icon',
                    'route_name' => 'galleries.create',
                    'url' => '/admin/galleries',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Users',
                'icon' => 'icon',
                'route_name' => 'users.index',
                'url' => '/admin/users',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Users',
                    'icon' => 'icon',
                    'route_name' => 'users.index',
                    'url' => '/admin/users',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create User',
                    'icon' => 'icon',
                    'route_name' => 'users.create',
                    'url' => '/admin/users',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Pages',
                'icon' => 'icon',
                'route_name' => 'pages.index',
                'url' => '/admin/pages',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Pages',
                    'icon' => 'icon',
                    'route_name' => 'pages.index',
                    'url' => '/admin/pages',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Page',
                    'icon' => 'icon',
                    'route_name' => 'pages.create',
                    'url' => '/admin/pages',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

            $data = [
                'title' => 'Settings',
                'icon' => 'icon',
                'route_name' => 'settings.index',
                'url' => '/admin/settings',
                'main' => 1,
                'parent_id' => 0,
            ];
            $main = Sidebar::create($data);
            Sidebar::insert([
                [
                    'title' => 'Settings',
                    'icon' => 'icon',
                    'route_name' => 'settings.index',
                    'url' => '/admin/settings',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
                [
                    'title' => 'Create Settings',
                    'icon' => 'icon',
                    'route_name' => 'settings.create',
                    'url' => '/admin/settings',
                    'main' => 0,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'parent_id' => $main->id,
                ],
            ]);

        }
    }
}
