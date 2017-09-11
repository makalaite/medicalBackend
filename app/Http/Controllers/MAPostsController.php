<?php namespace App\Http\Controllers;

use App\Models\MAPosts;
use Illuminate\Routing\Controller;

class MAPostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /maposts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = MAPosts::all();
        $response = [
            'posts' => $posts
        ];

        return response()->json($response, 200);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /maposts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /maposts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /maposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /maposts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /maposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /maposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}