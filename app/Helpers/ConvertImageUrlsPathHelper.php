<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class ConvertImageUrlsPathHelper
{
    public static function convertUrls(array $urls)
    {
        return array_map(function ($url) {
            return 'images/' . basename($url);
        }, $urls);
    }

    public static function convertSponsorUrls(array $sponsors)
    {
        return array_map(function ($sponsor) {
            $sponsor['images'] = array_map(function ($image) {
                $image['name'] = 'images/' . basename($image['name']);
                return $image;
            }, $sponsor['images']);
            return $sponsor;
        }, $sponsors);
    }

    public static function convertAgendaUrls(array $agenda)
    {
        return array_map(function ($item) {
            if (isset($item['slots']) && is_array($item['slots'])) {
                $item['slots'] = array_map(function ($slot) {
                    if (isset($slot['performers']) && is_array($slot['performers'])) {
                        $slot['performers'] = array_map(function ($performer) {
                            $performer['image'] = 'images/' . basename($performer['image']);
                            return $performer;
                        }, $slot['performers']);
                    }
                    return $slot;
                }, $item['slots']);
            }
            return $item;
        }, $agenda);
    }
}
