<?php 

namespace Etrain\CT;

class Loader{

    /**
     * Constructs the CT Loader, but this time only when Etrain\CT\Loader is instanced
     * Only do this during plugins_loaded
     *
     */
    public function __construct(){

        include_once( dirname(__FILE__) . '/init.php' );

    }

} 