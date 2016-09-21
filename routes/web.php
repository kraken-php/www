<?php

/**
 * Set current documentation version.
 */
define('DEFAULT_VERSION', '0.3');

function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('/', function () {
    return view('welcome')->with([ 'currentVersion' => DEFAULT_VERSION ]);
});

Route::get('/docs', 'DocsController@showRoot');
Route::get('/docs/{version}/{page?}', 'DocsController@showPage');

Route::get('/examples', 'ExamplesController@showRoot');
