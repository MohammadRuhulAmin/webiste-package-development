@extends('WebSitepkg::template.adminTemplate')


@section('content')
    <div class="jumbotron">
        <h3>Site Admin / Employee View</h3>
    </div>

        <div class="alert-danger">
            @if(empty($employeeList))
                No Employee Registered
            @else
        </div>

    <div class="jumbotron">
        <table class="table table-striped">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Type</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
            @foreach($employeeList as $empList)
           <tr>

                   <td>{{$empList->id}}</td>
                   <td>{{$empList->employeeName}}</td>
                   <td>{{$empList->employeeType}}</td>
                   <td>{{$empList->employeeEmail}}</td>
                   <td>{{$empList->employeeContact}}</td>
                   <td>{{$empList->employeeAddress}}</td>
                   <td>
                       <a class="btn btn-danger" href="{{route('employee.delete',$empList->id)}}"> Delete </a>
                       <a class="btn btn-success"  href="{{route('employee.edit',$empList->id)}}">Edit</a>

                   </td>

           </tr>
            @endforeach
        </table>
    </div>
    @endif

@endsection
