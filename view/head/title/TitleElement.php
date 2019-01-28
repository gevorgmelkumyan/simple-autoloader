<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/23/2019
 * Time: 23:40
 */

namespace View\Head\Title;

use View\DOMElementInterface;

class TitleElement implements DOMElementInterface {

    protected $value;

    private const START_TAG = '<title>';
    private const END_TAG = '</title>';

    public function __construct(array $params) {
        $this->value = isset($params['value']) ? $params['value'] : '';
    }

    public function view() : string {
        return self::START_TAG . $this->value . self::END_TAG;
    }

}