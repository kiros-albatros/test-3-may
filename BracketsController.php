<?php

class BracketsController
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function checkBrackets()
    {
        if (gettype($this->str) !== 'string') {
            return "Неверный тип данных";
        }

        $stack = [];
        for ($i = 0; $i < strlen($this->str); $i++) {
            if ($this->str[$i] == '{') {
                $stack[] = $this->str[$i];
            } else if ($this->str[$i] == '}') {
                if (count($stack) > 0) {
                    if (end($stack) == '{') {
                        array_pop($stack);
                    } else {
                        $stack[] = $this->str[$i];
                    }
                } else {
                    $stack[] = $this->str[$i];
                }
            }
        }
        if (count($stack) > 0) {
            return 'Неправильный код';
        } else {
            return 'Правильный код';
        }
    }
}

$tester = new BracketsController("{{lajkdhf{adfa}{}adfasdfadf{}}}");
echo ($tester->checkBrackets());

$tester2 = new BracketsController("{{lajkdhf{adfa");
echo ($tester2->checkBrackets());
