<?php


namespace Nextend\SmartSlider3\Parser\Link;


use Nextend\Framework\Parser\Link\ParserInterface;

class SlideEvent implements ParserInterface {

    public function parse($argument, &$attributes) {
        $attributes['role'] = 'button';

        /**
         * The event name can come from generator data, so it must be encoded as a JavaScript string.
         */
        $attributes['onclick'] = 'n2ss.trigger(this, ' . json_encode($argument) . ', event);';

        return '#';
    }
}