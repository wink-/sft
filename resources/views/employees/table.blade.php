<table id="employees" class="table table-striped table-bordered table-condensed">
    <thead>
        <th width="50px">Action</th>
        <th>Name</th>
        <th>Initials</th>
        <th>Code</th>
        <th>Production</th>
        <th>Supervisor</th>
        <th>Note</th>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>
                <a href="{!! route('employees.edit', [$employee->ID]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('employees.delete', [$employee->ID]) !!}"
                   onclick="return confirm('Are you sure wants to delete this Employee?')">
                    <i class="glyphicon glyphicon-remove"></i></a>
            </td>
            <td>{!! $employee->Name !!}</td>
            <td>{!! $employee->Initials !!}</td>
            <td>{!! $employee->Code !!}</td>
            <td>{!! $employee->Production !!}</td>
            <td>{!! $employee->Supervisor !!}</td>
            <td>{!! $employee->Note !!}</td>

        </tr>
    @endforeach
    </tbody>
</table>
