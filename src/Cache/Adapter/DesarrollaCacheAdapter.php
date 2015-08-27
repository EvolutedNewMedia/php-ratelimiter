<?php

namespace Sunspikes\Ratelimit\Cache\Adapter;

class DesarrollaCacheAdapter extends AbstractAdapter
{
    public function __construct($cache, $ttl)
    {
        $this->cache = $cache;
        $this->ttl = $ttl;
    }
}
