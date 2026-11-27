<?php

namespace Nextend\Framework\Parser\Link;

use Nextend\Framework\Parser\Link;

class ScrollToAlias implements ParserInterface {

    public function parse($argument, &$attributes) {

        /**
         * ScrollTo encodes the selector as a JavaScript string, the alias only needs CSS string escaping here.
         */
        return Link::getParser('ScrollTo')
                   ->parse('[data-alias="' . addcslashes($argument, '"\\') . '"]', $attributes);
    }
}