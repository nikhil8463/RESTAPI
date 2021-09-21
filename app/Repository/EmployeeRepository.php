<?php
namespace App\Repository;

use App\Models\EmployeeModel;

class EmployeeRepository 
{
    public function fetch()
    {
        return EmployeeModel::when(request()->employee_id, function($query){
            $query->where('id', request()->employee_id);    // searching using id of employee
        })
        ->when(request()->dept_id, function($query){
            $query->where('dept_id', request()->dept_id); // searching using department id of employee
        })
        ->when(request()->f_name, function($query){
            $query->where('f_name', request()->f_name); // searching using first name of employee
        })
        ->when(request()->l_name, function($query){
            $query->where('l_name',request()->l_name);  // searching using lasy_name of employee
        })
        ->when(request()->email_id, function($query){
            $query->where('email_id',request()->email_id); // searching using email_id of employee
        })
        ->when(request()->conatct_no, function($query){
            $query->where('contact_no', request()->contact_no); // searching using contact no of employee
        })
        ->when(request()->employee_id, function($query){
            $query->where('id', request()->employee_id); // searching using contact no of employee
        })
        ->get();
    }
    public function details($id){
        return EmployeeModel::find($id);
    }
    // function for creating new department
    function create($requestedData)
    {
        $model = new EmployeeModel();
        // $model->dept_name = $requestedData->dept_name;
        $model->dept_id = $requestedData->dept_id;
        $model->f_name = $requestedData->f_name;
        $model->l_name = $requestedData->l_name;
        $model->email_id = $requestedData->email_id;
        $model->contact_no = $requestedData->contact_no;
        $model->address = $requestedData->address;
        return $model->save();
    }
    //Update employee
    function update($requestedData, $id)
    {
        $model = EmployeeModel::find($id); //find employee by id to update the deatils.
        $model->dept_id = $requestedData->dept_id;
        $model->f_name = $requestedData->f_name;
        $model->l_name = $requestedData->l_name;
        $model->email_id = $requestedData->email_id;
        $model->contact_no = $requestedData->contact_no;
        $model->address = $requestedData->address;
        return $model->save();
    }
    //delete employeee
    function delete($id)
    {
        $model = EmployeeModel::find($id); //find employee by id to delete the deatils.
        return $model->delete();
    }
}