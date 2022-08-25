<?php

namespace App\Services;

use Config;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DataTables;
use Gate;

class RolesServise
{

    public function index()
    {

    }

    public function create()
    {
        return Permission::with('child')->where('main', 1)->get();

    }

    public function store($request)
    {
        $permissions = [];
        $permissions = $request->permisions;
        $role = Role::create(['name' => $request->name, 'guard_name' => 'web']);
        $role->givePermissionTo($permissions);
    }

    public function getdata()
    {
        $data = Role::select('id', 'name')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.roles.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.roles.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('role_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.roles.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('role_delete')) {
                    $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                }
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Role::find($id);


    }

    public function AllowedPermissions($id)
    {
        return Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->where(['role_has_permissions.role_id' => $id])
            ->get()->pluck('name', 'id');
    }

    public function update($request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        $permissions = $request->permisions;
        $role->syncPermissions($permissions);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($role)
            $role->delete();

    }
}
