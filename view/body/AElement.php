<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/28/2019
 * Time: 21:01
 */

namespace View\Body;


use View\DOMElementInterface;

class AElement implements DOMElementInterface {

    protected $href;
    protected $value;
    protected $target;

    private const START_TAG = '<a';
    private const END_TAG = '</a>';

    public function __construct(array $params) {
        $this->href = isset($params['href']) ? $params['href'] : '';
        $this->value = isset($params['value']) ? $params['value'] : '';
        $this->target = isset($params['target']) ? $params['target'] : '';
    }

    public function view() : string {
        return self::START_TAG .
               " href='$this->href'" .
               " target='$this->target'>" .
               $this->value .
               self::END_TAG;

    }
}