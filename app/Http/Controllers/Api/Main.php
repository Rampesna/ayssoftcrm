<?php

namespace App\Http\Controllers\Api;

use App\Http\Api\AyssoftTakipApi;
use App\Http\Controllers\Controller;
use App\Http\Responses\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Main extends Controller
{

    public function SingleCallStatistics(Request $request)
    {
        if (strtolower($request->getMethod()) != 'get') {
            return response()->json(Response::MethodNotAllowed($request->getMethod()), 401);
        } else {
            if (is_null($request->extension)) {
                return response()->json(Response::EmptyVariableResponse('extension'), 401);
            } else {
                try {
                    $ch = curl_init();

                    is_null($request->startDate) ? $startDate = date('d/m/Y') : $startDate = $request->startDate;
                    is_null($request->endDate) ? $endDate = date('d/m/Y') : $endDate = $request->endDate;

                    $params = [
                        'extensionName[]' => $request->extension,
                        'startDate' => "$startDate",
                        'endDate' => "$endDate",
                        'staticticsType' => 'dayly',
                        'timeName' => 'custom'
                    ];

                    curl_setopt_array($ch, [
                        CURLOPT_URL => 'http://uyumsoft.netasistan.com/istatistik/dahilibazli/adetpro',
                        CURLOPT_REFERER => 'http://uyumsoft.netasistan.com',
                        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36 OPR/71.0.3770.310',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_POSTFIELDS => $params
                    ]);

                    $result = curl_exec($ch);
                    curl_close($ch);
                    $last = str_replace(["\n", "\t", "\r", "  "], null, $result);
                    preg_match('~<table class="table table-striped table-bordered datatable" id="datatable">(.*?)<\/table>~', $last, $searchResults);
                    preg_match('~<tbody>(.*?)</tbody>~', $searchResults[1], $tbody);
                    preg_match_all('~<tr>(.*?)</tr>~', $tbody[1], $lines);

                    $returnArray = [];

                    foreach ($lines[1] as $key => $line) {
                        preg_match_all('~<td .*?>(.*?)</td>~', $line, $columns);
                        $counter = 0;
                        foreach ($columns[1] as $column) {
                            if ($counter == 0) {
                                $returnArray[$key]["date"] = $column;
                            } else if ($counter == 1) {
                                preg_match('~<span .*?>(.*?)</span>~', $column, $data);
                                $exploded = explode(' - ', $data[1]);
                                $returnArray[$key]["extension"] = trim($exploded[0]);
                                $returnArray[$key]["name"] = rtrim($exploded[1]);
                            } else if ($counter == 2) {
                                $returnArray[$key]["total_call"] = $column;
                            } else if ($counter == 3) {
                                preg_match('~<button .*?>(.*?)</button>~', $column, $data);
                                $returnArray[$key]["total_inner"] = $data[1];
                            } else if ($counter == 4) {
                                $returnArray[$key]["total_outer"] = $column;
                            }
                            $counter++;
                        }
                    }

                    return response()->json(Response::SuccessResponse($returnArray), 200);
                } catch (\Exception $exception) {
                    return response()->json(Response::ErrorResponse($exception), 401);
                }
            }
        }
    }

}
