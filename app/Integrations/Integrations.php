<?php

namespace BT\Integrations;

use BT\Integrations\WordpressRSS;

class Integrations
{
    private WordpressRSS $wordpressnews;

    public function __construct()
    {
        $this->wordpressnews = \BT\App::init(new WordpressRSS());
    }

    public function wordpressnews(): WordpressRSS
    {
        return $this->wordpressnews;
    }
}
