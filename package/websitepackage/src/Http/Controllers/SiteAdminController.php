<?php
namespace  TeamBravo\WebSitepkg\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TeamBravo\WebSitepkg\Models\Employee;
class SiteAdminController extends Controller{

    public function index(){
        return view('WebSitepkg::SiteAdmin.SiteAdminIndex');
    }

    public function employeeListView(){
        $employeeList = Employee::all();
        return view('WebSitepkg::SiteAdmin.EmployeeListView',compact('employeeList'));
    }

    public function employeeDelete($id){
        $employee = Employee::find($id);
        $employee->delete();
        echo "Employee Deleted!";
    }

    public function editEmployee($id){
        $employee = Employee::find($id);
        return view('WebSitepkg::SiteAdmin.editEmployeePage',compact('employee'));
    }

    public function updateEmployee(Request $request,$employee_id){
        $employee = Employee::find($employee_id);
        $employee->employeeName = $request->employeeName;
        $employee->employeeEmail = $request->employeeEmail;
        $employee->employeeContact = $request->employeeContact;
        $employee->employeeAddress = $request->employeeAddress;
        $employee->employeeType = $request->employeeType;
        $employee->save();
        echo "Employee is update successfully!";
    }

    public function createEmployee(){
        return view('WebSitepkg::SiteAdmin.CreateEmployee');
    }

    public function storeEmployee(Request  $request){
        $employee = new Employee();
        $employee->employeeName = $request->employeeName;
        $employee->employeeEmail = $request->employeeEmail;
        $employee->employeeContact = $request->employeeContact;
        $employee->employeeAddress = $request->employeeAddress;
        $employee->employeeType = $request->employeeType;
        $employee->save();
        return "Employe is created Successfully!";
    }

}
