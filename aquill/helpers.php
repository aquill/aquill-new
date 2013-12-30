<?php

function admin_include($filename) {
    if (is_readable($path = APP . 'views/partials/' . $filename . EXT)) {
        return require $path;
    }
}

function aquill_include($filename, $bundle = DEFAULT_BUNDLE ) {
    if (is_readable($path = Bundle::path($bundle) . 'views/partials/' . $filename . EXT)) {
        return require $path;
    }
}

function theme_include($filename) {
    if (is_readable($path = PATH . 'themes/default/' . $filename . EXT)) {
        return require $path;
    }
}

function is_admin() {
    return strpos(URL::current(), 'admin') !== 0;
}

function body_class($classes = '') {
    $classes .= str_replace('/', ' ', URI::current());

    return 'class="' . $classes . '"';
}

function is_page($page = 'admin') {
    return strpos(URL::current(), $page) !== false;
}

function rewrite($arr ,$type = 'post') {
    $rewrite = Config::get('rewrite.'.$type);

    foreach ($arr as $key => $value) {
        if (strpos($rewrite, '{' . $key . '}') !== false) {
            $rewrite = str_replace('{' . $key . '}', $value, $rewrite);
        }
    }

    return $rewrite;
}

function rule_by_id($type = 'post') {
    $rewrite = Config::get('rewrite.'.$type);

    if (strpos($rewrite, '{id}') !== false) {
        return true;
    }

    return false;
}

function rewrite_rule($type = 'post') {
    if ($type == 'post') {
        $patterns['year'] = '[0-9]+';
        $patterns['month'] = '[0-9]+';
        $patterns['day'] = '[0-9]+';
        $patterns['category'] = '.*';        
    }

    if (rule_by_id($type)) {
        $patterns['id'] = '(:num)';
        $patterns['name'] = '.*';
    } else {
        $patterns['id'] = '[0-9]+';
        $patterns['name'] = '(.*)';
    }

    return trim(rewrite($patterns), '/');
}
