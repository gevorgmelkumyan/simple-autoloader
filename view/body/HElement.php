<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/28/2019
 * Time: 20:46
 */

namespace View\Body;

use View\DOMElementInterface;

class HElement implements DOMElementInterface {

    protected $number;
    protected $styles;
    protected $value;

    private $startTag;
    private $endTag;

    public function __construct(array $params) {

        $this->number = isset($params['number']) ? $params['number'] : '';
        $this->styles = isset($params['styles']) ? $params['styles'] : '';
        $this->value = isset($params['value']) ? $params['value'] : '';

        $this->startTag = "<h$this->number style='$this->styles'>";
        $this->endTag = "</h$this->number>";
    }

    public function view() : string {
        return $this->startTag .
               $this->value .
               $this->endTag;
    }
}