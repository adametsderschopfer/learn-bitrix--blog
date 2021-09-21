<?php

namespace ADDesign\Api\Methods;

use ADDesign\Api\Api;

class Unknown extends Api
{
    public function init()
    {
        $this->responseCode = 404;
        $this->setResultError('unknown method', 404);
    }
}
