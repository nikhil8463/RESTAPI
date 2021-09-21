<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModel;
use Illuminate\Http\Request;
use App\Repository\DepartmentRepository;

class DepartmentController extends Controller
{
    private $departmentRepo;
    public function __construct()
    {
        $this->departmentRepo = new DepartmentRepository();
    }

    public function index()
    {
        return $this->departmentRepo->fetch();
    }

    public function details(Request $request)
    {
        return $this->departmentRepo->details($request->id);
    }

    public function insert(Request $request)
    {
        return $this->departmentRepo->create($request);
    }

    public function update(Request $request, $id)
    {
        return $this->departmentRepo->update($request, $id);
    }

    public function delete(Request $request)
    {
        return $this->departmentRepo->delete($request->id);
    }
}
