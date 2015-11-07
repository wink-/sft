<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\EmployeeRepository;
use App\Models\Employee;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class EmployeeAPIController extends AppBaseController
{
	/** @var  EmployeeRepository */
	private $employeeRepository;

	function __construct(EmployeeRepository $employeeRepo)
	{
		$this->employeeRepository = $employeeRepo;
	}

	/**
	 * Display a listing of the Employee.
	 * GET|HEAD /employees
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = $this->employeeRepository->all();

		return $this->sendResponse($employees->toArray(), "Employees retrieved successfully");
	}

	/**
	 * Show the form for creating a new Employee.
	 * GET|HEAD /employees/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Employee in storage.
	 * POST /employees
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Employee::$rules) > 0)
			$this->validateRequestOrFail($request, Employee::$rules);

		$input = $request->all();

		$employees = $this->employeeRepository->create($input);

		return $this->sendResponse($employees->toArray(), "Employee saved successfully");
	}

	/**
	 * Display the specified Employee.
	 * GET|HEAD /employees/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$employee = $this->employeeRepository->apiFindOrFail($id);

		return $this->sendResponse($employee->toArray(), "Employee retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Employee.
	 * GET|HEAD /employees/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Employee in storage.
	 * PUT/PATCH /employees/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Employee $employee */
		$employee = $this->employeeRepository->apiFindOrFail($id);

		$result = $this->employeeRepository->updateRich($input, $id);

		$employee = $employee->fresh();

		return $this->sendResponse($employee->toArray(), "Employee updated successfully");
	}

	/**
	 * Remove the specified Employee from storage.
	 * DELETE /employees/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->employeeRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Employee deleted successfully");
	}
}
