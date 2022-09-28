Route::get('/{nombreConjunto}/login', 'ConjuntoController@loginConjunto')->name('autenticar');

Route::get('/{nombreConjunto}', 'ConjuntoController@loginConjunto')->name('autenticar');

Route::get('/login', 'ConjuntoController@login')->name('login');