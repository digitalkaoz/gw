<?php

namespace Bolt\Extension\vimeo\vimeoapi;

use Bolt\Application;
use Bolt\BaseExtension;
use Vimeo;

class Extension extends BaseExtension
{

    public function initialize() {

        $this->addTwigFunction('videoGroup', 'videoGroup');
        $this->addTwigFunction('videoTitle', 'videoTitle');
        $this->addTwigFunction('videoImages', 'videoImages');
    }

    public function getName(){
        return "vimeoapi";
    }

    function videoGroup($groupID){
        $config = json_decode(file_get_contents(__DIR__ . '/config.json'), true);
        $lib = new \Vimeo\Vimeo($config['client_id'], $config['client_secret']);
        $lib->setToken($config['access_token']);
        $response = $lib->request('/groups/'.$groupID.'/videos?fields=total,name,pictures.sizes.link,uri', array(), 'GET');

        #$responseImage = $lib->request($videoData.'/pictures?fields=total,uri,sizes.link', array(), 'GET');

        return $response['body']['data'];
    }

    function videoTitle($groupID){
        $config = json_decode(file_get_contents(__DIR__ . '/config.json'), true);
        $lib = new \Vimeo\Vimeo($config['client_id'], $config['client_secret']);
        $lib->setToken($config['access_token']);
        $response = $lib->request('/groups/'.$groupID.'/videos?fields=total,name', array(), 'GET');

        return $response['body']['data'];
    }

    function videoImages($videoData){
        $config = json_decode(file_get_contents(__DIR__ . '/config.json'), true);
        $lib = new \Vimeo\Vimeo($config['client_id'], $config['client_secret']);
        $lib->setToken($config['access_token']);
        $response = $lib->request($videoData.'/pictures?fields=total,uri,sizes.link', array(), 'GET');

        $arrayLength = count($response['body']['data']);

        if($arrayLength > 12){
           $arrayLength = 12;
        }

        for($x = 0; $x < $arrayLength; $x++) {
            $video[] = $response['body']['data'][$x]['sizes'][2]['link'];
        }

        return $video;
    }
}