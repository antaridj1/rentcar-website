<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit(){
        $user = Auth::user();
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $userId = Auth::id();
        $data = [
            'email' => 'required|email',
            'name' => 'required',
        ];

        if($request->password != null) {
            $data['password'] = 'required|min:8';
        }

        $request->validate($data);

        $newData = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        if($request->password != null) {
            $newData['password'] = bcrypt($request->password);
        }

        User::where('id',$userId)->update($newData);

        return redirect('profile')
            ->with('status','success')
            ->with('message','Data berhasil diedit');
    }

    public function editWebsite(){
        $user = Auth::user();
        return view('admin.website.edit', compact('user'));
    }

    public function updateWebsite(Request $request)
    {
        $userId = Auth::id();
        $data = [
            'phone' => 'required',
            'address' => 'required',
            'maps_link' => 'required',
            'embed_maps' => 'required',
            'instagram_username' => 'required',
            'instagram_link' => 'required',
        ];

        $request->validate($data);

        $newData = [
            'phone' => $request->phone,
            'address' => $request->address,
            'maps_link' => $request->maps_link,
            'embed_maps' => $request->embed_maps,
            'instagram_username' => $request->instagram_username,
            'instagram_link' => $request->instagram_link,
        ];

        User::where('id',$userId)->update($newData);

        return redirect('/website')
            ->with('status','success')
            ->with('message','Data berhasil diedit');
    }

}
