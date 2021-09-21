<?php
namespace App\Repository;

use App\Models\DepartmentModel;

class DepartmentRepository 
{
    public function fetch()
    {
        return DepartmentModel::when(request()->department_name, function($query){
            $query->where('dept_name', request()->department_name);
        })
        ->get();
    }
    public function details($id){
        return DepartmentModel::find($id);
    }
    // function for creating new department
    function create($requestedData)
    {
        $model = new DepartmentModel();
        $model->dept_name = $requestedData->dept_name;
        return $model->save();
    }
    //Update department
    function update($requestedData, $id)
    {
        $model = DepartmentModel::find($id); //find department by id to update the deatils.
        $model->dept_name = $requestedData->dept_name;
        return $model->save();
    }
    //delete department
    function delete($id)
    {
        $model = DepartmentModel::find($id); //find department by id to delete the deatils.
        return $model->delete();
    }
}