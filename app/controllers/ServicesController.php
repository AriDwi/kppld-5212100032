<?php

class ServicesController extends \BaseController {

	/**
	 * Display a listing of services
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Datatable::shouldHandle()) {
            return Datatable::collection (Service::all(array('id', 'nama', 'lokasi', 'jasa', 'biaya_servis', 'kontak', 'jam_buka', 'rekomendasi', 'review', 'rating')))
                ->showColumns('id', 'nama')
                ->addColumn ('', function($model) {
                     $html = '<a href="'.route('admin.services.edit', ['services'=>$model->id]).'" class="uk-button uk-button-small uk-button-link">edit</a> ';
                    $html .= Form::open(array('url' => route('admin.services.destroy', ['services'=>$model->id]), 'method'=>'delete', 'class'=>'uk-display-inline'));
					$html .= Form::submit('delete', array('class' => 'uk-button uk-button-small'));
					$html .= Form::close();
					return $html;
                })
                ->searchColumns('nama')
                ->orderColumns('nama')
                ->make();
        }
        return View::make('services.index')->withTitle('Informasi Servis Motor');
        
	}

	/**
	 * Show the form for creating a new service
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('services.create')->withTitle('Tambah Tempat');
	}

	/**
	 * Store a newly created service in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Service::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$service=Service::create($data);

		return Redirect::route('admin.services.index')->withTitle("successMessage", "Berhasil menambahkan $service->nama");
	}

	/**
	 * Display the specified service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$service = Service::findOrFail($id);

		return View::make('services.show', compact('service'));
	}

	/**
	 * Show the form for editing the specified service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$service = Service::find($id);
		return View:: make( 'services.edit', ['service' => $service])->withTitle("Ubah $service->nama");
	}

	/**
	 * Update the specified service in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$service = Service::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Service::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$service->update($data);

		return Redirect::route('admin.services.index')->with("successMessage", "Berhasil menyimpan $service->nama");
	}

	/**
	 * Remove the specified service from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Service::destroy($id);

		return Redirect::route('admin.services.index')->with ('successMessage','Data berhasil dihapus.');
	}

}
