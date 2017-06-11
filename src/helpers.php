<?php

function scripts($key)
{
    $path = config('assets.scripts.'.$key);
    $html = '';
    if (! empty($path)) {
        if (is_array($path)) {
            foreach ($path as $file) {
                $html .= "<script type=\"javascript\" src=\"{$file}\"></script>\n";
            }
        } else {
            $html = "<script type=\"javascript\" src=\"{$path}\"></script>";
        }
    }

    return new \Illuminate\Support\HtmlString($html);
}

function styles($key)
{
    $path = config('assets.styles.'.$key);

    $html = '';

    if (! empty($path)) {

        if (is_array($path)) {
            foreach ($path as $file) {
                $html .= "<link href=\"{$file}\" rel=\"stylesheet\" type=\"text/css\">\n";
            }
        } else {
            $html = "<link href=\"{$path}\" rel=\"stylesheet\" type=\"text/css\">";
        }
    }

    return new \Illuminate\Support\HtmlString($html);
}
