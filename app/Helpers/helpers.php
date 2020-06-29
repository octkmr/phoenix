<?php
use Illuminate\Routing\Route;

/**
 * 現在のルート名を返す
 *
 * @return string|null
 */
function get_route_name() {
    return request()->route()
       ? request()->route()->getName()
       : null;
}