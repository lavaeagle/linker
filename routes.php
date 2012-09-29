<?php

Route::controller( Controller::detect( 'linker' ) );

Route::get( '(:bundle)', function()
{
    return Redirect::to( 'linker/main/dashboard' );
});