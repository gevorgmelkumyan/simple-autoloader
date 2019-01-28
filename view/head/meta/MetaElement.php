<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/24/2019
 * Time: 18:18
 */

namespace View\Head\Meta;

use View\DOMElementInterface;

class MetaElement implements DOMElementInterface {

    private const START_TAG = '<meta';
    private const END_TAG = '>';

    protected $charset;
    protected $name;
    protected $content;
    protected $styles;

    public function __construct(array $params) {
        $this->charset = isset($params['charset']) ? $params['charset'] : null;
        $this->name = isset($params['name']) ? $params['name'] : null;
        $this->content = isset($params['content']) ? $params['content'] : null;
        $this->styles = isset($params['styles']) ? $params['styles'] : null;
    }

    public function view() : string {
        return self::START_TAG .
            ($this->charset ? " charset='$this->charset'" : " ") .
            ($this->name ? " name='$this->name'" : " ") .
            ($this->content ? " content='$this->content'" : " ") .
            ($this->styles ? " styles='$this->styles'" : " ") .
            self::END_TAG;
    }

}