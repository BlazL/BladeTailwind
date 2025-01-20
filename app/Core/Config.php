<?php

    namespace BT\Core;

    class Config
    {
        private array $config = [];

        public function __construct()
        {
            $this->config = [
                'version' => wp_get_environment_type() === 'development' ? time() : BT_VERSION,
                'env' => [
                    'type' => wp_get_environment_type(),
                    'mode' => false === strpos(BT_PATH, ABSPATH . 'wp-content/plugins') ? 'theme' : 'plugin',
                ],
                'cache' => [
                    'path' => wp_upload_dir()['basedir'] . '/cache/bt',
                ],
                'resources' => [
                    'path' => BT_PATH . '/resources',
                ],
                'views' => [
                    'path' => BT_PATH . '/resources/views',
                ],
            ];
        }

        public function get(string $key): mixed
        {
            $value = $this->config;

            foreach (explode('.', $key) as $key) {
                if (isset($value[$key])) {
                    $value = $value[$key];
                } else {
                    return null;
                }
            }

            return $value;
        }

        public function isTheme(): bool
        {
            return 'theme' === $this->get('env.mode');
        }

        public function isPlugin(): bool
        {
            return 'plugin' === $this->get('env.mode');
        }
    }