<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table ="employee";

    protected $fillable =  ['f_name','l_name','email_id','contact_no','address'];

}
