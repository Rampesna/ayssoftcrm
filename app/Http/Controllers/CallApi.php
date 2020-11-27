<?php

namespace App\Http\Controllers;


use App\Http\Api\AyssoftTakipApi;
use App\Http\Api\AyssoftIkApi;
use Illuminate\Support\Facades\Http;


class CallApi extends Controller
{

    public function CallQuees()
    {
        return Http::post('http://uyumsoft.netasistan.com/home/dashboard/datarefresh', []);
    }

    public function TvScreenGetJobList()
    {
        $api = new AyssoftTakipApi();
        $tvScreenJobList = $api->TvScreenGetJobList();
        if (is_null($tvScreenJobList['response'])) {
            return response()->json($tvScreenJobList, 200);
        } else {
            $responseBody = $tvScreenJobList['response'];
            $totalNewJobs = 0;
            foreach ($responseBody as $data) {
                if ($data['durum'] == "True") {
                    $totalNewJobs += $data['sayi'];
                }
            }
            $returnArray = [
                'responseBody' => $responseBody,
                'totalNewJobs' => $totalNewJobs
            ];

            return response()->json($returnArray, 200);
        }
    }

    public function TvScreenEmployeeAndJobTracking()
    {
        $ayssoftTakipApi = new AyssoftTakipApi();
        $tvScreenGetStaffStatusList = $ayssoftTakipApi->TvScreenGetStaffStatusList();
        $tvScreenGetStaffStarList = $ayssoftTakipApi->TvScreenGetStaffStarList();

        $ayssoftIkApi = new AyssoftIkApi();
        $todayShiftEmployee = $ayssoftIkApi->ShiftEmployeeToday()['content']['user'];
        $todayPermittedEmployees = $ayssoftIkApi->TodayPermittedEmployees()['content'];

        $users = [];
        $blackTeam = $greenTeam = $blueTeam = $redTeam = $purpleTeam = $brownTeam = $otherTeams = [
            "users" => 0,
            "absentees" => 0,
            "arrived" => 0,
            "in_job" => 0,
            "not_job" => 0,
            "total_job" => 0,
            "support" => 0
        ];
        $totalUserCount = $needBreakCount = $foodBreakCount = $otherBreakCount = $activeUserCount = $absenteeUserCount = $allActiveUsers = 0;

        foreach ($tvScreenGetStaffStatusList['response'] as $user) {

            $user['takimKodu'] == 1 ? $teamName = 'blackTeam' : null;
            $user['takimKodu'] == 2 ? $teamName = 'greenTeam' : null;
            $user['takimKodu'] == 3 ? $teamName = 'blueTeam' : null;
            $user['takimKodu'] == 4 ? $teamName = 'redTeam' : null;
            $user['takimKodu'] == 5 ? $teamName = 'purpleTeam' : null;
            $user['takimKodu'] == 6 ? $teamName = 'brownTeam' : null;

            $$teamName["users"] += 1;
            $$teamName["total_job"] += $user['yapilanIs'];
            if ($user['durumKodu'] == 6) {
                $$teamName["absentees"] += 1;
            } else if ($user['durumKodu'] != 6) {
                $$teamName["arrived"] += 1;
            }
            if ($user['durumKodu'] == 1) {
                $$teamName["in_job"] += 1;
            } else if ($user['durumKodu'] == 2 || $user['durumKodu'] == 3) {
                $$teamName["not_job"] += 1;
            } else if ($user['durumKodu'] == 8) {
                $$teamName["support"] += 1;
            }

            $users[] = $user;
            $totalUserCount += 1;

            if ($user['durumKodu'] == 1) {
                $allActiveUsers += 1;
            }

            if ($user['durumKodu'] == 2) {
                $needBreakCount += 1;
            } else if ($user['durumKodu'] == 3) {
                $foodBreakCount += 1;
            } else if ($user['durumKodu'] == 8 || $user['durumKodu'] == 4 || $user['durumKodu'] == 5) {
                $otherBreakCount += 1;
            }

            if ($user['durumKodu'] != 6) {
                $activeUserCount += 1;
            } else {
                $absenteeUserCount += 1;
            }

        }

        $allBreakCount = $needBreakCount + $foodBreakCount + $otherBreakCount;

        $returnArray = [
            'blackTeam' => $blackTeam,
            'greenTeam' => $greenTeam,
            'blueTeam' => $blueTeam,
            'redTeam' => $redTeam,
            'purpleTeam' => $purpleTeam,
            'brownTeam' => $brownTeam,
            'totalUserCount' => $totalUserCount,
            'needBreakCount' => $needBreakCount,
            'foodBreakCount' => $foodBreakCount,
            'otherBreakCount' => $otherBreakCount,
            'allBreakCount' => $allBreakCount,
            'activeUserCount' => $activeUserCount,
            'absenteeUserCount' => $absenteeUserCount,
            'users' => $users,
            'starList' => $tvScreenGetStaffStarList['response'],
            'allActiveUsers' => $allActiveUsers,
            'todayShiftEmployee' => $todayShiftEmployee,
            'todayPermittedEmployees' => $todayPermittedEmployees
        ];

        return response()->json($returnArray, 200);

    }

}
