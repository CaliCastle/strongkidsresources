<?php

if (! function_exists('current_uri_is')) {
    /**
     * Check if the current uri is the desired uri and return ' current' for css class.
     *
     * @param $desiredUri
     *
     * @return string
     */
    function current_uri_is($desiredUri) {
        $uri = request()->getRequestUri();

        if ($uri === "/" && $desiredUri == "/") {
            return ' current';
        }

        if (str_contains($uri, '/' . $desiredUri)) {
            return ' current';
        }

        return '';
    }
}