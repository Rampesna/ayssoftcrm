<?php


namespace App\Http\Api;


class AyssoftIkApi extends ApiBase
{
    public function __construct()
    {
        $this->baseUrl = env('AYSSOFT_IK_API_BASE_URL', 'ik.ayssoft.com/api/');
        $this->_token = env('AYSSOFT_IK_API_TOKEN', '');
    }

    public function ShiftEmployeesToday()
    {
        $endpoint = "Shift/ShiftEmployeeToday";
        $headers = [
            '_token' => $this->_token,
        ];
        return $this->callApi($this->baseUrl . $endpoint, 'get', $headers);
    }

    public function ShiftEmployeesLastSunday()
    {
        $endpoint = "Shift/ShiftEmployeesLastSunday";
        $headers = [
            '_token' => $this->_token,
        ];
        return $this->callApi($this->baseUrl . $endpoint, 'get', $headers);
    }

    public function TodayPermittedEmployees()
    {
        $endpoint = "Permit/TodayPermittedEmployees";
        $headers = [
            '_token' => $this->_token,
        ];
        return $this->callApi($this->baseUrl . $endpoint, 'get', $headers);
    }

    public function TodayOvertimePermittedEmployees()
    {
        $endpoint = "Permit/TodayOvertimePermittedEmployees";
        $headers = [
            '_token' => $this->_token,
        ];
        return $this->callApi($this->baseUrl . $endpoint, 'get', $headers);
    }

}
