<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AysApi;
use App\Http\Helpers\General;
use App\Models\Section;
use App\Models\Television;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

    public function Abandons()
    {
        return view('pages.tv.abandon');
    }

    public function Section1()
    {
        return view('pages.tv.sections.section1');
    }

    public function Section2()
    {
        return view('pages.tv.sections.section2');
    }

    public function Section3()
    {
        return view('pages.tv.sections.section3');
    }

    public function Section4()
    {
        return view('pages.tv.sections.section4');
    }

    public function Section5()
    {
        return view('pages.tv.sections.section5');
    }


}
