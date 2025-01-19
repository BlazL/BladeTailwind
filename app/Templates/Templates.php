<?php

namespace BT\Templates;

use BT\Templates\Provider;
use BT\Templates\Resolver;

class Templates
{
    private Provider $provider;

    private Resolver $resolver;

    public function __construct()
    {
        $this->provider = \BT\App::init(new Provider());
        $this->resolver = \BT\App::init(new Resolver());
    }

    public function render(string $template, array $data = []): void
    {
        $this->provider->render($template, $data);
    }

    public function generate(string $template, array $data = []): string
    {
        return $this->provider->generate($template, $data);
    }
}
