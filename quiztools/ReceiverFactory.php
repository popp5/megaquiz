<?php

namespace popp\ch17\megaquiz\quiztools;

/**
 * @license   http://www.example.com Borsetshire Open License
 * @package quiztools
 */

/**
 * @package quiztools
 */
class ReceiverFactory
{
    public static function getAccessManager()
    {
        return new AccessManager();
    }
}
