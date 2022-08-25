<?php

namespace App\Services;

use Config;
use App\Models\Sub_Category;
use App\Models\Category;
use App\Models\Sidebar;
use DataTables;

class SidebarServices
{

    public function index()
    {
    }

    public function create()
    {
        return Sidebar::where('parent_id',0)->get();
    }

//     public function subcategory($request)
//    {
//        $html = "<option>Select Option</option>";
//        $subcat = Sub_Category::where('cat_id', $request->cat)->get();
//        foreach ($subcat as $item) {
//            $html = $html . "<option value='" . $item->id . "'>" . $item->name . "</option>";
//        }
//        return $html;
//    }

    public function store($request)
    {
        $parrent_id = $request->parrent ?? 0;
               $main = ($request->main == "main") ? 1 : 0;
       Sidebar::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'url' => $request->url,
            'route_name' => $request->route_name,
            'main' => $main,
            'parent_id' => $parrent_id
        ]);
    }

    public function getdata()
    {
        $data = Sidebar::select('id', 'title', 'icon', 'url', 'route_name', 'parent_id')->get();

        return Datatables::of($data)->addIndexColumn()

            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.sidebar.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.sidebar.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.sidebar.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })->addColumn('main', function ($row) {
                return ($row->parent_id == 0) ? 'main' : '---';
            })->rawColumns(['action' ,'main'
            ])->make(true);
    }

    public function edit($id)
    {
        return Sidebar::find($id);
    }

    public function update($request, $id)
    {
        $Sidebar = Sidebar::find($id);
        $Sidebar->title = $request->title;
        $Sidebar->icon = $request->icon;
        $Sidebar->url = $request->url;
        $Sidebar->route_name = $request->route_name;
        $Sidebar->save();
    }

    public function destroy($id)
    {
        $Sidebar = Sidebar::find($id);
        if ($Sidebar) {
            $Sidebar->delete();
        }
    }
}
