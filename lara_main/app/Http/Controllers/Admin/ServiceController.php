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

    public function roofs_index()
    {
        $roof = new Roof();
        return view('user.roofs',['data' => $roof->all()]);
    }

    public function roof_detail($id)
    {
        $roof = new Roof();
        $img_find = $roof->find($id);
        $url = Storage::url($img_find->img);

        return view('user.roof_detail',['data' => $roof->find($id),'img'=> $url]);
    }

    public function roofDetail($id)
    {
        $roof = new Roof();
        $img_find = $roof->find($id);
        $url = Storage::url($img_find->img);
        $url2 = Storage::url($img_find->img2);
        $url3 = Storage::url($img_find->img3);

        return view('admin.service.roof_detail',['data' => $roof->find($id),'img'=> $url,'img2'=> $url2,'img3'=> $url3]);
    }

    public function updateRoof($id, ServiceRequest $reg)
    {
        $roof = Roof::find($id);

        $roof->name = $reg->input('name');

/*
        foreach($reg->file(‘images’, []) as $file) {

        }


        $file = Storage::putFile('avatars', $reg->file('image'));
        if(!$file){
            $roof->img = $file;
        }
        $file2 = Storage::putFile('avatars', $reg->file('image2'));
        if($file){
            $roof->img2 = $file2;
        }
        $file3 = Storage::putFile('avatars', $reg->file('image3'));
        if($file){
            $roof->img3 = $file3;
        }
*/
       // dd($reg->file('image'));
        foreach($reg->file("image", []) as $key => $file) {
            $roof->{$key} = Storage:: putFile('avatars', $file);
        }

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
