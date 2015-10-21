<?php
namespace Bolt\Extension\vimeo\vimeoapi;

use Bolt\Application;
use Bolt\BaseExtension;
use Vimeo;

class Extension extends BaseExtension
{
    private $lib;

    public function initialize()
    {
        $this->addTwigFunction('videoGroup', 'videoGroup');
        $this->addTwigFunction('videoTitle', 'videoTitle');
        $this->addTwigFunction('videoImages', 'videoImages');

        $config = json_decode(file_get_contents(__DIR__ . '/config.json'), true);
        $this->lib = new \Vimeo\Vimeo($config['client_id'], $config['client_secret']);
        $this->lib->setToken($config['access_token']);

    }

    public function getName()
    {
        return "vimeoapi";
    }

    public function videoGroup($groupID)
    {
        $key = __DIR__.'/cache/group_'.$groupID.'.json';

        $response = $this->getCache($key);

        if (false === $response) {
            $response = $this->lib->request('/groups/' . $groupID . '/videos?fields=total,name,pictures.sizes.link,uri', array(), 'GET');
            $this->putCache($key, $response);
        }

        return $response['body']['data'];
    }

    public function videoTitle($groupID)
    {
        $key = __DIR__.'/cache/title_'.$groupID.'.json';

        $response = $this->getCache($key);

        if (false === $response) {
            $response = $this->lib->request('/groups/' . $groupID . '/videos?fields=total,name', array(), 'GET');
            $this->putCache($key, $response);
        }

        return $response['body']['data'];
    }

    public function videoImages($videoId)
    {
        $key = __DIR__.'/cache/images_'.$videoId.'.json';

        $response = $this->getCache($key);

        if (false === $response) {
            $response = $this->lib->request($videoId . '/pictures?fields=total,uri,sizes.link', array(), 'GET');
            $this->putCache($key, $response);
        }

        $arrayLength = count($response['body']['data']);
        if ($arrayLength > 12) {
            $arrayLength = 12;
        }

        $video = array();
        for ($x = 0; $x < $arrayLength; $x++) {
            $video[] = $response['body']['data'][$x]['sizes'][2]['link'];
        }

        return $video;
    }

    private function getCache($key)
    {
        if (file_exists($key)) {
            return json_decode(file_get_contents($key), true);
        }

        return false;
    }

    private function putCache($key, $data)
    {
        if (!is_writable(pathinfo($key, PATHINFO_DIRNAME))) {
            mkdir(pathinfo($key, PATHINFO_DIRNAME), null, true);
        }

        file_put_contents($key, json_encode($data));
    }
}
