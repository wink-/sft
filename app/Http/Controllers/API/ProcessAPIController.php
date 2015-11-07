<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ProcessRepository;
use App\Models\Process;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProcessAPIController extends AppBaseController
{
	/** @var  ProcessRepository */
	private $processRepository;

	function __construct(ProcessRepository $processRepo)
	{
		$this->processRepository = $processRepo;
	}

	/**
	 * Display a listing of the Process.
	 * GET|HEAD /processes
	 *
	 * @return Response
	 */
	public function index()
	{
		$processes = $this->processRepository->all();

		return $this->sendResponse($processes->toArray(), "Processes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Process.
	 * GET|HEAD /processes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Process in storage.
	 * POST /processes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Process::$rules) > 0)
			$this->validateRequestOrFail($request, Process::$rules);

		$input = $request->all();

		$processes = $this->processRepository->create($input);

		return $this->sendResponse($processes->toArray(), "Process saved successfully");
	}

	/**
	 * Display the specified Process.
	 * GET|HEAD /processes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$process = $this->processRepository->apiFindOrFail($id);

		return $this->sendResponse($process->toArray(), "Process retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Process.
	 * GET|HEAD /processes/{id}/edit
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
	 * Update the specified Process in storage.
	 * PUT/PATCH /processes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Process $process */
		$process = $this->processRepository->apiFindOrFail($id);

		$result = $this->processRepository->updateRich($input, $id);

		$process = $process->fresh();

		return $this->sendResponse($process->toArray(), "Process updated successfully");
	}

	/**
	 * Remove the specified Process from storage.
	 * DELETE /processes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->processRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Process deleted successfully");
	}
}
