<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use Zttp\Zttp;

class FetchInstagrams
{
    public function handle(Jigsaw $jigsaw) {
        if($jigsaw->getEnvironment() !== "production") {
            return $jigsaw->setConfig('instagrams', $this->getCachedResults());
        }

        try {
            $images = $this->fetchImages();
        } catch(\Exception $e) {
            return $jigsaw->setConfig('instagrams', $this->getCachedResults());    
        }
        
        $this->cacheImages($images);

        $jigsaw->setConfig('instagrams', $images);
    }

    private function cacheImages($images) {
        file_put_contents("last_instagram_fetch.json", json_encode($images));
    }

    private function getCachedResults() {
        return json_decode(file_get_contents("last_instagram_fetch.json"), true);
    }

    private function fetchImages() {
        $token = getenv('INSTAGRAM_TOKEN');
        $url_format = "https://graph.instagram.com/me/media?fields=%s&limit=%s&access_token=%s";
        $media_fields = "caption,id,media_type,media_url,thumbnail_url,permalink,children{media_type,media_url},timestamp";
        $url = sprintf($url_format, $media_fields, 20, $token);    
        $response = Zttp::get($url);

        if($response->status() !== 200) {
            throw new \Exception("unable to fetch images");
        }

        $media = $response->json()['data'];

        $media = array_filter($media, function($image) {
            return $image['media_type'] === 'IMAGE';
        });

        return  array_map(function($image) {
            return $image['media_url'];
        }, $media);

    }
}