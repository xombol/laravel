<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roof;
use App\Models\ProjectRoof;
use App\Http\Requests\ServiceRequest;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

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
        $roof = Roof::find($id);
        $url = Storage::url($roof->img);

        return view('user.roof_detail',['data' => $roof,'img'=> $url]);
    }

    public function roof_pdf($id)
    {

            $text = request('text');
            $canvas1 = request('canvas1');
            $canvas2 = request('canvas2');
            $roof = Roof::find($id);
            $pdf = \PDF::loadView('user.test_pdf', ['data' => $roof, 'text' => $text, 'canvas1'=>$canvas1,'canvas2'=>$canvas2 ]);

            return response($pdf->download('document.pdf')) ;
            $path = storage_path('app/public/pdf/');
            $fileName =  time().'.'. 'pdf' ;
            $pdf->save($path . '/' . $fileName);

            $pdf = public_path('storage/pdf/'.$fileName);

            //return response()->download($pdf);

    }

    protected function save_project(Request $request)
    {
        $user = $request->user();

        $roof_project = new ProjectRoof();
        $roof_project->user_id = $user->id;
        $roof_project->roof_id = $request->input('roof_id');
        $roof_project->shirina_ons = $request->input('shirina_ons');
        $roof_project->visota_podema = $request->input('visota_podema');
        $roof_project->dlinna_svesa = $request->input('dlinna_svesa');
        $roof_project->dlinna_steni = $request->input('dlinna_steni');
        $roof_project->shag_stropil = $request->input('shag_stropil');
        $roof_project->area = $request->input('area');
        $roof_project->count_area = $request->input('count_area');
        $roof_project->dlina_stripol = $request->input('dlina_stripol');
        $roof_project->count_st = $request->input('count_st');
        $roof_project->pr_ves_h = $request->input('pr_ves_h');
        $roof_project->min_sec = $request->input('min_sec');
        $roof_project->objem_brusa = $request->input('objem_brusa');
        $roof_project->prim_ves_br = $request->input('prim_ves_br');
        $roof_project->rast_mej_doskami = $request->input('rast_mej_doskami');
        $roof_project->kol_dosok_obr = $request->input('kol_dosok_obr');
        $roof_project->area_dosok = $request->input('area_dosok');
        $roof_project->pr_ves_dosok = $request->input('pr_ves_dosok');
        $roof_project->save();

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
    public function view_all_projects()
    {
        $roofs = ProjectRoof::paginate(20);
        return view('admin.projectss.roof_projects_all',['roofs' => $roofs]);

        // $roofs = new ProjectRoof();
        //// return view('admin.projectss.roof_projects_all',['data' => $roofs->all()]);
    }
    public function detail_roof_project($id)
    {
        $roof = ProjectRoof::find($id);
        return view('admin.projectss.rood_detail',['data' => $roof]);
    }

    public function projects()
    {
        $roof = new Roof();
        return view('admin.projectss.all_projects',['data' => $roof->all()]);
    }

}
