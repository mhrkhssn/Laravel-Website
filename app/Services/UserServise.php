<?php

namespace App\Services;

use Config;
use App\Models\User;
use DataTables;
use Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserServise
{

    public function index()
    {

    }

    public function create()
    {

        return Role::all();
    }

    public function store($request)
    {


        $data = $request->all();
        $data['image'] = "dist/Profile/defualt.png";
        $fileNameToStore = null;
        $data['password'] = Hash::make($request->password);
        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Profile';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }

        $user = User::create($data);
        $roles = $request->role ? $request->role : [];
        $user->assignRole($roles);
        $a = User::with('roles')->get();
    }

    public function user_deactive($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->active = 0;
            $user->save();
        }
    }

    public function user_active($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->active = 1;
            $user->save();
        }

    }


    public function getdata()
    {
        $data = User::select('id', 'email', 'name', 'email_verified_at', 'active', 'role')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('status', function ($row) {
                return ($row->active == 1) ? 'Active' : 'Deactive';
            })->addColumn('email_verified_at', function ($row) {
                return ($row->email_verified_at != null) ? ' verified ' : 'Not verified';
            })
            ->addColumn('action', function ($row) {

                $a = $row->active;
                $admin = $row->is_admin;
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.users.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.users.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';

                if ($admin != 1) {
                    if ($a == 1) {
                        $btn = $btn . ' <a title="Deactive" href="' . route("admin.user.status.deactive", $row->id) . '" class="ml-2">  <i class="fas fa-user-slash"></i></a>';
                    } else {
                        $btn = $btn . ' <a title="Active" href="' . route("admin.user.status.active", $row->id) . '" class="ml-2">  <i class="fas fa-user"></i></a>';
                    }
                }
                if (Gate::allows('users_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.users.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('users_delete')) {
                    $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                }
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action', 'status', 'email_verified_at'])
            ->make(true);
    }

    public function edit($id)
    {
        return User::find($id);


    }

    public function update($request, $id)
    {
        $user = User::find($id);
        $data = $request->all();
//        $data['image']="dist/Profile/defualt.png";
        $fileNameToStore = null;

        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Profile';
            $file->move($destinationPath, $fileNameToStore);
            $user->image = $destinationPath . '/' . $fileNameToStore;
        }
        if (isset($request->password) && $request->password != null)
            $user->password = Hash::make($request->password);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        $roles = $request->input('role') ? $request->input('role') : [];
        $user->syncRoles($roles);
        $a = User::with('roles')->get();

    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        if ($User)
            $User->delete();

    }
}
