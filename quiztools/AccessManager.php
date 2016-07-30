<?php

namespace popp\ch17\megaquiz\quiztools;

use popp\ch17\megaquiz\quizobjects\User;

/**
 * @license   http://www.example.com Borsetshire Open License
 * @package quiztools
 */

/**
 * @package quiztools
 */
class AccessManager
{
    public function login($user, $pass)
    {
        $ret = new User($user);
        return $ret;
    }

    public function getError()
    {
        return "move along now, nothing to see here";
    }
}
