<?php 

namespace BT\Integrations;

use XMLReader;
use SimpleXMLElement;

class WordpressRSS
{
    private ?array $data = null;

    public function get(): array
    {
        if (empty($data = $this->read())) {
            return [];
        }

        if (empty($keys = array_rand($data, 5))) {
            return [];
        }

        return array_values(array_filter($data, fn(int $key) => in_array($key, $keys), ARRAY_FILTER_USE_KEY));
    }

    private function read(): array
    {
        if (! empty($this->data)) {
            return $this->data;
        }

        $this->data = [];

        $reader = new XMLReader();
        $reader->open('https://wordpress.org/news/feed/podcast/wordpress-briefing-a-wordpress-podcast/');

        while ($reader->read()) {
            if ($reader->nodeType === XMLReader::ELEMENT && $reader->name === 'item') {
                $item = new SimpleXMLElement($reader->readOuterXML(), LIBXML_NOCDATA);

                if (! empty($item->title) && ! empty($item->link)) {
                    $this->data[] = [
                        'title' => (string) $item->title,
                        'url' => (string) $item->link,
                        'description' => ! empty($item->description) ? (string) $item->description : '',
                    ];
                }
            }
        }

        $reader->close();

        return $this->data;
    }
}
