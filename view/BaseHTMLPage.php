<?php

namespace View;

class BaseHTMLPage implements HTMLPageInterface {

    protected $head;
    protected $body;
    protected $fullHTML = '';
    private const STATIC = '<!DOCTYPE html>' .
                           '<html lang="en">';
    
    public function __construct(string $head, string $body) {
        $this->fullHTML .= self::STATIC;
        $this->head = $head;
        $this->body = $body;
    }

    public function view() : string {

        $this->fullHTML .= '<head>' . $this->head . '</head>';
        $this->fullHTML .= '<body style="background-color: #2980B9; text-align: center;">' . $this->body . '</body>';

        return $this->fullHTML;
    }
}