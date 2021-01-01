@extends('WebSitepkg::template.adminTemplate')


@section('content')
    <div class="jumbotron">
        <h3>Site Admin / Create Employee</h3>
    </div>

    <form action="{{route('employee.store')}}" method="post">
        @csrf
        <div class="jumbotron">
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td>
                        <input class="form-control" type="text" value="" name="employeeName">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text"  value="" name="employeeEmail"></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input class="form-control" type="text"  value="" name="employeeContact"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input class="form-control" type="text"  value="" name="employeeAddress"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input class="form-control" value="" type="text" name="employeeType"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success pull-right"  type="submit" value="Create"></td>
                </tr>
            </table>
        </div>
    </form>

@endsection
