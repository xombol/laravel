<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roof;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function roofs()
    {
        $roof = new Roof();
        return view('admin.service.roofs',['data' => $roof->all()]);
    }

    public function roofDetail($id)
    {
        $roof = new Roof();
        return view('admin.service.roof_detail',['data' => $roof->find($id)]);
    }

    public function updateRoof($id, ServiceRequest $reg)
    {
        $roof = Roof::find($id);

        $roof->name = $reg->input('name');



        $file = Storage::putFile('avatars', $reg->file('image'));
        $roof->img = $file;
        /*
        $file2 = $reg->file($file);
        $name = $file2->getClientOriginalName();*/

        // $url = Storage::url('file.jpg'); тут и сам путь к файлу



        $roof->osn_par1 = $reg->input('osn_par1');
        $roof->osn_par2 = $reg->input('osn_par2');
        $roof->osn_par3 = $reg->input('osn_par3');
        $roof->osn_par4 = $reg->input('osn_par4');

        $roof->strop_par1 = $reg->input('strop_par1');
        $roof->strop_par2 = $reg->input('strop_par2');

        $roof->obres_par1 = $reg->input('obres_par1');
        $roof->obres_par2 = $reg->input('obres_par2');
        $roof->obres_par3 = $reg->input('obres_par3');
        $roof->status = $reg->input('status');

        $roof->save();
        return redirect()->route('admin.roof', $id)->with('success','Сообщение было обновлено');
    }

}
