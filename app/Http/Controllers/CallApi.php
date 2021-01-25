<?php

namespace App\Http\Controllers;


use App\Http\Api\AyssoftTakipApi;
use App\Http\Api\AyssoftIkApi;
use App\Http\Helpers\General;
use App\Services\TvPanelService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class CallApi extends Controller
{

    public function CallQuees()
    {
        return TvPanelService::CallQueesService();
    }

    public function GetJobList()
    {
        return response()->json(TvPanelService::GetJobListService(), 200);
    }

    public function EmployeeAndJobTracking()
    {
        return response()->json(TvPanelService::EmployeeAndJobTrackingService(), 200);
    }

    public function ShiftEmployeesLastSunday()
    {
        return response()->json(TvPanelService::ShiftEmployeesLastSundayService(), 200);
    }

    public function Abandon()
    {
        return response()->json(TvPanelService::AbandonService(), 200);
    }

    public function GetPointDay()
    {
        return response()->json(TvPanelService::GetPointDayService());
    }

    public function GetPointWeek()
    {
        return response()->json(TvPanelService::GetPointWeekService());
    }

    public function GetMonthJobRanking()
    {
        return response()->json(TvPanelService::GetMonthJobRankingService());
    }

}
