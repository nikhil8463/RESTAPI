<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use App\Repository\EmployeeRepository;

class EmployeeController extends Controller
{
    //

    private $employeeRepo;
    public function __construct()
    {
        $this->employeeRepo = new EmployeeRepository();
    }
   
    public function index()
    {
        return $this->employeeRepo->fetch();
    }

    public function details(Request $request)
    {
        return $this->employeeRepo->details($request->id);
    }

    public function insert(Request $request)
    {
        return $this->employeeRepo->create($request);
    }

    public function update(Request $request, $id)
    {
        return $this->employeeRepo->update($request, $id);
    }

    public function delete(Request $request)
    {
        return $this->employeeRepo->details($request->id);
    }}
