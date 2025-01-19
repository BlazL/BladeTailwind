<?php

    namespace BT\Core;

    class Config
    {
        private array $config = [];

        public function __construct()
        {
            $this->config = [
                'version' => BT_VERSION,
                'path' => BT_PATH,
                'uri' => BT_URI,
                'cache' => [
                    'path' => wp_upload_dir()['basedir'] . '/cache/fm',
                ],
                'env' => [
                    'type' => wp_get_environment_type(),
                    'mode' => false === strpos(BT_PATH, ABSPATH . 'wp-content/plugins') ? 'theme' : 'plugin',
                ],
                'images' => [
                    'path' => BT_PATH . '/resources/images',
                    'uri' => BT_URI . '/resources/images',
                ],
                'styles' => [
                    'path' => BT_PATH . '/resources/styles',
                    'uri' => BT_URI . '/resources/images',
                ],
                'scripts' => [
                    'path' => BT_PATH . '/resources/scripts',
                    'uri' => BT_URI . '/resources/images',
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