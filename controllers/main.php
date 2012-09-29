<?php

class Linker_Main_Controller extends Base_Controller {

    public function get_index()
    {
        return Redirect::to( 'linker/main/dashboard' );
    }

    public function get_dashboard() {

        $activated = Session::has( 'linker' );
        return View::make( 'linker::dashboard' );

    }

    public function get_activate() {

        Session::put( 'linker', true );
        return Redirect::to( 'linker/main/dashboard' );

    }

    public function get_deactivate() {

        Session::forget( 'linker' );
        return Redirect::to( 'linker/main/dashboard' );

    }
}