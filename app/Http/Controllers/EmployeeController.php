<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Libraries\Repositories\EmployeeRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class EmployeeController extends AppBaseController
{

	/** @var  EmployeeRepository */
	private $employeeRepository;

	function __construct(EmployeeRepository $employeeRepo)
	{
		$this->employeeRepository = $employeeRepo;
	}

	/**
	 * Display a listing of the Employee.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = $this->employeeRepository->all();

		return view('employees.index')
			->with('employees', $employees);
	}

	/**
	 * Show the form for creating a new Employee.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employees.create');
	}

	/**
	 * Store a newly created Employee in storage.
	 *
	 * @param CreateEmployeeRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEmployeeRequest $request)
	{
		$input = $request->all();

		$employee = $this->employeeRepository->create($input);

		Flash::success('Employee saved successfully.');

		return redirect(route('employees.index'));
	}

	/**
	 * Display the specified Employee.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$employee = $this->employeeRepository->find($id);

		if(empty($employee))
		{
			Flash::error('Employee not found');

			return redirect(route('employees.index'));
		}

		return view('employees.show')->with('employee', $employee);
	}

	/**
	 * Show the form for editing the specified Employee.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = $this->employeeRepository->find($id);

		if(empty($employee))
		{
			Flash::error('Employee not found');

			return redirect(route('employees.index'));
		}

		return view('employees.edit')->with('employee', $employee);
	}

	/**
	 * Update the specified Employee in storage.
	 *
	 * @param  int              $id
	 * @param UpdateEmployeeRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateEmployeeRequest $request)
    {


        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }


        $this->employeeRepository->updateRich($request->all(), $id);


		Flash::success('Employee updated successfully.');

		return redirect(route('employees.index'));
	}

	/**
	 * Remove the specified Employee from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee = $this->employeeRepository->find($id);

		if(empty($employee))
		{
			Flash::error('Employee not found');

			return redirect(route('employees.index'));
		}

		$this->employeeRepository->delete($id);

		Flash::success('Employee deleted successfully.');

		return redirect(route('employees.index'));
	}
}
