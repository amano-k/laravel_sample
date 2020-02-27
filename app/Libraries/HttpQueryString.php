<?php

namespace App\Libraries;

use Request;

class HttpQueryString
{
    public function get($isLastItem = false)
    {
        $query = Request::query();
        $queryString = '';
        if (!empty($query)) {
            if ($isLastItem === true) {
                $query['page'] = $query['page'] - 1;
                if ($query['page'] <= 0) {
                    unset($query['page']);
                }
            }
            $queryString = http_build_query($query, '', '&');
        }
        return $queryString;
    }
}
