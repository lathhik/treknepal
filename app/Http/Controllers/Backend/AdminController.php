<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;


class AdminController extends Controller
{

    public function index()
    {
        $admins = Admin::all();
        foreach ($admins as $singleAdmin) {
            return view('Backend.pages.dashboard')->with('singleAdmin', $singleAdmin);
        }

    }

    public function addAdmin()
    {
        $admins = Admin::all();
        foreach ($admins as $singleAdmin){

            return view('Backend.pages.admin.add-admin')->with('singleAdmin', $singleAdmin);
        }
    }

    public function addAction(Request $request)
    {
        $admin = new Admin();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->address = $request->address;
        $admin->phone = $request->phone;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file);

            if (!file_exists(public_path('/custom/Backend/img/admin'))) {
                mkdir(public_path('/custom/Backend/img/admin'));
            }

            $image->resize(300, 300, function ($ar) {
                $ar->aspectRatio();
            })->crop(300, 200)->save(public_path('custom/Backend/img/admin/' . $newName));
        }

        $admin->image = $newName;

        $admin->save();

        return redirect('admin/view-admin');
    }


    public function viewAdmin()
    {
        $admins = Admin::all();
        return view('Backend.pages.admin.view-admin')->with('admins', $admins);

    }

    public function editAdmin($id)
    {
        $singleAdmin = Admin::find($id);

        return view('Backend.pages.admin.edit-admin')->with('singleAdmin', $singleAdmin);
    }

    public function updateAdmin(Request $request, $id)
    {
        $singleAdmin = Admin::find($id);

        $singleAdmin->first_name = $request->first_name;
        $singleAdmin->last_name = $request->last_name;
        $singleAdmin->email = $request->email;
        $singleAdmin->address = $request->address;
        $singleAdmin->phone = $request->phone;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (!file_exists(public_path('custom/Backend/img/admin'))) {
                mkdir(public_path('custom/Backend/img/admin'));
            }

            if ($singleAdmin->image) {
                if (file_exists(public_path('custom/Backend/img/admin/' . $singleAdmin->image))) {
                    unlink(public_path('custom/Backend/img/admin/' . $singleAdmin->image));
                }
            }
            $image->resize(300, 300, function ($ar) {
                $ar->aspectRatio();
            })->crop(300, 300)->save(public_path('custom/Backend/img/admin/' . $newName));
        }
        $singleAdmin->image = $newName;
        $singleAdmin->save();

        return redirect('admin/view-admin');

    }

    public function deleteAdmin($id)
    {
        $singleAdmin = Admin::find($id);
        if ($singleAdmin->image) {

            if (file_exists(public_path('/custom/Backend/img/admin/' . $singleAdmin->image)) && unlink(public_path('/custom/Backend/img/admin/' . $singleAdmin->image))) {
                $singleAdmin->delete();
            };
        }

        $singleAdmin->delete();

        return redirect('admin/view-admin');
    }

}
