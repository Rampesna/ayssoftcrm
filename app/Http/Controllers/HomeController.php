<?php

namespace App\Http\Controllers;

use App\Services\TvPanelService;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function deneme()
    {
        return response()->json(TvPanelService::AbandonService(), 200);
    }
}
