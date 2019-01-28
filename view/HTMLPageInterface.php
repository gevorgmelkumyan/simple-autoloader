<?php
/**
 * Created by PhpStorm.
 * User: Gevorg
 * Date: 1/23/2019
 * Time: 18:03
 */

namespace View;

interface HTMLPageInterface {

    public function __construct(string $head, string $body);

    public function view() : string;
}