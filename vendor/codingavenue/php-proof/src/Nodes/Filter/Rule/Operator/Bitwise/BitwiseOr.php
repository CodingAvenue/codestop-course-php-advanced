<?php

namespace CodingAvenue\Proof\Nodes\Filter\Rule\Operator\Bitwise;

use CodingAvenue\Proof\Nodes\Filter\Rule\Rule;
use CodingAvenue\Proof\Nodes\Filter\Rule\RuleInterface;

class BitwiseOr extends Rule implements RuleInterface
{
    const CLASS_ = '\PhpParser\Node\Expr\BinaryOp\BitwiseOr';

    public function getRule(): callable
    {
        $class = self::CLASS_;
        
        return function($node) use ($class) {
            return $node instanceof $class;
        };
    }

    public function allowedOptionalFilter()
    {
        return array();
    }
}
