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
        $response = Zttp::get('https://api.instagram.com/v1/users/self/media/recent/?   access_token=3470499854.7769b6a.52889813b921401e98c6bd9e15b4aeea');

        if($response->status() !== 200) {
            throw new \Exception("unable to fetch images");
        }

        $media = $response->json()['data'];
        return array_map(function($media) {
            return $media['images']['standard_resolution']['url'];
        }, $media);

    }
}