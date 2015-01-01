<?php

use Westwing\User\UserUploadCommand;
use Laracasts\Commander\CommanderTrait;

class PagesController extends \BaseController {

    use CommanderTrait;




    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //PHP 5.5 required
        //$this->execute(UserUploadCommand::class,Input::only('file', 'email'), ['Westwing\User\UserUploadSanitizer']);


        //php 5.4 or below
        $user = $this->execute('Westwing\User\UserUploadCommand',
            Input::only('file', 'email'),
            ['Westwing\User\UserUploadSanitizer']);
        $email = $user['email'];
        $results = $user['items'];

        //Flash::overlay('You have successfully uploaded file!');

        return View::make('pages.csv', compact('results', 'email'));
	}



}
