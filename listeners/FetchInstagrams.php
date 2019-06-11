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
        $response = Zttp::get("https://api.instagram.com/v1/users/self/media/recent/?access_token={$token}");

        if($response->status() !== 200) {
            throw new \Exception("unable to fetch images");
        }

        $media = $response->json()['data'];

        $media = array_filter($media, function($image) {
            return $image['type'] !== 'video';
        });

        return  array_map(function($image) {
            return $image['images']['standard_resolution']['url'];
        }, $media);

    }
}