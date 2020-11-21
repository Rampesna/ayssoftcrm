<?php

namespace App\Http\Controllers;

use App\Http\Helpers\General;
use App\Models\Section;
use App\Models\Television;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvPanel extends Controller
{

    public function Index()
    {
        $televisions = Television::with('Section')->get();
        $sections = Section::all();
        return view('pages.tv.index', compact('televisions', 'sections'));
    }

    public function Store(Request $request)
    {
        $television = new Television($request->all());
        $television->save();
        return redirect()->back()->with(['data_type' => 'success', 'data' => 'Televizyon Başarıyla Oluşturuldu']);
    }

    public function Section1()
    {
        $data = Http::post('http://uyumsoft.netasistan.com/home/dashboard/datarefresh', []);
        $quees = $data['kuyruklar'];

        $response = [
            "iuyum" => General::search($quees, 'ad', 'Iuyum')[0],
            "efaturaearsiv" => General::search($quees, 'ad', 'EfaturaEarsiv')[0],
            "hesapaktivasyon" => General::search($quees, 'ad', 'HesapAktivasyon')[0],
            "eirsaliyehesapacilis" => General::search($quees, 'ad', 'eIsaliyeHesapAcilis')[0],
            "eirsaliyedestek" => General::search($quees, 'ad', 'eIrsaliyeDestek')[0],
            "edefter" => General::search($quees, 'ad', 'Edefter')[0],
            "edefterimzalama" => General::search($quees, 'ad', 'EdefterImzalama')[0],
            "ekocari" => General::search($quees, 'ad', 'EkoCari')[0]
        ];

        $totalQuee =
            $response['iuyum']['bekleyen'] +
            $response['efaturaearsiv']['bekleyen'] +
            $response['hesapaktivasyon']['bekleyen'] +
            $response['eirsaliyehesapacilis']['bekleyen'] +
            $response['eirsaliyedestek']['bekleyen'] +
            $response['edefter']['bekleyen'] +
            $response['edefterimzalama']['bekleyen'] +
            $response['ekocari']['bekleyen'];

        $totalLost =
            ($response['iuyum']['terkedilmis'] - $response['iuyum']['callback']) +
            ($response['efaturaearsiv']['terkedilmis'] - $response['efaturaearsiv']['callback']) +
            ($response['hesapaktivasyon']['terkedilmis'] - $response['hesapaktivasyon']['callback']) +
            ($response['eirsaliyehesapacilis']['terkedilmis'] - $response['eirsaliyehesapacilis']['callback']) +
            ($response['eirsaliyedestek']['terkedilmis'] - $response['eirsaliyedestek']['callback']) +
            ($response['edefter']['terkedilmis'] - $response['edefter']['callback']) +
            ($response['edefterimzalama']['terkedilmis'] - $response['edefterimzalama']['callback']) +
            ($response['ekocari']['terkedilmis'] - $response['ekocari']['callback']);

        return view('pages.tv.sections.section1', compact('response', 'totalQuee', 'totalLost'));
    }

    public function Section2()
    {
        return view('pages.tv.sections.section2');
    }

}
