<?php

namespace Iolivieri\Iopackage\Controllers;

use Illuminate\Http\Request;
use Iolivieri\Iopackage\Iopackage;

class IopackageController
{
    public function __invoke(Iopackage $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}
