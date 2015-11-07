<table class="table">
    <thead>
    <th>Procname</th>
			<th>Descript</th>
			<th>Mincost</th>
			<th>Id</th>
			<th>Timestamp</th>
			<th>Created At</th>
			<th>Updated At</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($processes as $process)
        <tr>
            <td>{!! $process->PROCNAME !!}</td>
			<td>{!! $process->DESCRIPT !!}</td>
			<td>{!! $process->MINCOST !!}</td>
			<td>{!! $process->ID !!}</td>
			<td>{!! $process->TimeStamp !!}</td>
			<td>{!! $process->created_at !!}</td>
			<td>{!! $process->updated_at !!}</td>
            <td>
                <a href="{!! route('processes.edit', [$process->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('processes.delete', [$process->id]) !!}" onclick="return confirm('Are you sure wants to delete this Process?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
