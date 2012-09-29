<?php

/**
 * Linker, simulate a user randomly clicking all the links in your site.
 *
 * @author Michael Calkins <michael@clouddueling.com>
 * @copyright 2012 CloudDueling.com <info@clouddueling.com>
 * @license MIT License <http://www.opensource.org/licenses/mit>
 */
class Linker
{
    public static function render()
    {
        $data = array(
            'refresh_interval'  => Config::get( 'linker::display.refresh_interval' ),
            'dont_follows'  => Config::get( 'linker::display.dont_follows' ),
        );

        if( Session::has( 'linker' ) )
            return View::make('linker::main', $data)->render();
    }
}
