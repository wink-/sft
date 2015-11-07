<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProcessRequest;
use App\Http\Requests\UpdateProcessRequest;
use App\Libraries\Repositories\ProcessRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ProcessController extends AppBaseController
{

	/** @var  ProcessRepository */
	private $processRepository;

	function __construct(ProcessRepository $processRepo)
	{
		$this->processRepository = $processRepo;
	}

	/**
	 * Display a listing of the Process.
	 *
	 * @return Response
	 */
	public function index()
	{
		$processes = $this->processRepository->paginate(10);

		return view('processes.index')
			->with('processes', $processes);
	}

	/**
	 * Show the form for creating a new Process.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('processes.create');
	}

	/**
	 * Store a newly created Process in storage.
	 *
	 * @param CreateProcessRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProcessRequest $request)
	{
		$input = $request->all();

		$process = $this->processRepository->create($input);

		Flash::success('Process saved successfully.');

		return redirect(route('processes.index'));
	}

	/**
	 * Display the specified Process.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$process = $this->processRepository->find($id);

		if(empty($process))
		{
			Flash::error('Process not found');

			return redirect(route('processes.index'));
		}

		return view('processes.show')->with('process', $process);
	}

	/**
	 * Show the form for editing the specified Process.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$process = $this->processRepository->find($id);

		if(empty($process))
		{
			Flash::error('Process not found');

			return redirect(route('processes.index'));
		}

		return view('processes.edit')->with('process', $process);
	}

	/**
	 * Update the specified Process in storage.
	 *
	 * @param  int              $id
	 * @param UpdateProcessRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProcessRequest $request)
	{
		$process = $this->processRepository->find($id);

		if(empty($process))
		{
			Flash::error('Process not found');

			return redirect(route('processes.index'));
		}

		$this->processRepository->updateRich($request->all(), $id);

		Flash::success('Process updated successfully.');

		return redirect(route('processes.index'));
	}

	/**
	 * Remove the specified Process from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$process = $this->processRepository->find($id);

		if(empty($process))
		{
			Flash::error('Process not found');

			return redirect(route('processes.index'));
		}

		$this->processRepository->delete($id);

		Flash::success('Process deleted successfully.');

		return redirect(route('processes.index'));
	}
}
