@extends('WebSitepkg::template.adminTemplate')


@section('content')
    <div class="jumbotron">
        <h3>Site Admin / Employee View / Edit</h3>
    </div>
    <form action="{{route('employee.update',$employee->id)}}" method="post">
        @csrf
        <div class="jumbotron">
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td>
                        <input class="form-control" type="text" value="{{$employee->employeeName}}" name="employeeName">
{{--                        <input type="hidden" value="{{$employee->id}}" name="employee_id">--}}
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text"  value="{{$employee->employeeEmail}}" name="employeeEmail"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input class="form-control" type="text"  value="{{$employee->employeeContact}}" name="employeeContact"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input class="form-control" type="text"  value="{{$employee->employeeAddress}}" name="employeeAddress"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input class="form-control" value="{{$employee->employeeType}}" type="text" name="employeeType"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success pull-right"  type="submit" value="update"></td>
                </tr>
            </table>
        </div>
    </form>

@endsection
