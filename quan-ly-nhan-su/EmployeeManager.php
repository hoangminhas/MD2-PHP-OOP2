<?php
include_once "Employee.php";

class EmployeeManager
{
    private string $path;

    public function __construct()
    {
        $this->path = 'data.json';
    }

    public function saveData($data)
    {
        $dataJSON = json_encode($data);
        file_put_contents($this->path, $dataJSON);
    }

    public function loadData()
    {
        $dataJSON = file_get_contents($this->path);
        return json_decode($dataJSON, true);
    }

//    public function convertToObject($arr)
//    {
//        $data = json_decode($arr);
//        $objects = [];
//        foreach ($data as $item) {
//            $employee = new Employee($item->firstName, $item->lastName,
//            $item->birth, $item->address, $item->position);
//            $objects[] = $employee;
//        }
//        return $objects;
//    }

    public function addEmployee($employee)
    {
        $employees = $this->loadData();
        $data = [
            "firstName" => $employee->getFirstName(),
            "lastName" => $employee->getLastName(),
            "dob" => $employee->getBirth(),
            "address" => $employee->getAddress(),
            "position" => $employee->getPosition()
        ];
        $employees[] = $data;
        $this->saveData($employees);
    }

    public function showEmployee($id)
    {
        $data = $this->loadData();
        return $data[$id];
    }

    public function deleteEmployee($id)
    {
        $data = $this->loadData();
        array_splice($data, $id, 1);
        $this->saveData($data);
    }

    public function modifyEmployee($id,$employee)
    {
        $employees = $this->loadData();
        $employees[$id] = [
            "firstName" => $employee->getFirstName(),
            "lastName" => $employee->getLastName(),
            "dob" => $employee->getBirth(),
            "address" => $employee->getAddress(),
            "position" => $employee->getPosition()
        ];
        $this->saveData($employees);
    }

}
