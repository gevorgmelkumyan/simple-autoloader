<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/28/2019
 * Time: 21:08
 */

namespace View\Body;


use View\DOMElementInterface;

class ImageElement implements DOMElementInterface {

    protected $src;
    protected $width;

    private const START_TAG = '<img';
    private const END_TAG = '>';

    public function __construct(array $params) {
        $this->src = isset($params['src']) ? $params['src'] : '';
        $this->width = isset($params['width']) ? $params['width'] : '';
    }

    public function view() :string {
        return self::START_TAG .
               " src='$this->src'" .
               " width='$this->width'" .
               self::END_TAG;
    }

}