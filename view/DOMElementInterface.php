<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/28/2019
 * Time: 21:15
 */

namespace View;


interface DOMElementInterface {

    public function __construct(array $params);

    public function view() : string;
}