<?php

Route::get('guests/index', ['as' => 'guests.index', function()
{
    $guests = Guest::all();
    return View::make('guests.index', compact('guests'));
}]);

Route::get('guests/create', ['as' => 'guests.create', function()
{
    return View::make('guests.create');
}]);

Route::post('guests/store', ['as' => 'guests.store', function()
{
    $validation = Validator::make(Input::all(), ['name' => 'required', 'message' => 'required']);

    if($validation->fails())
    {
        return Redirect::back()->withInput()->withFlashMessage('Please fill out both fields.');
    }

    Guest::create([
        'name' => Input::get('name'),
        'message' => Input::get('message')
    ]);

    return Redirect::route('guests.index');
}]);

Route::get('/', function()
{
	return View::make('hello');
});


