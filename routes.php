<?php

namespace Tee\Auth;
use Route;

Route::any('/login', __NAMESPACE__.'\Controllers\LoginController@index');
Route::any('/logout', __NAMESPACE__.'\Controllers\LoginController@index');