<?php

namespace popp\ch17\megaquiz\command;

/**
 * @license   http://www.example.com Borsetshire Open License
 * @package   command
 */

/**
 * @package command
 */
class FeedbackCommand extends Command
{

    public function execute(CommandContext $context)
    {
        $msgSystem = ReceiverFactory::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('pass');
        $topic = $context->get('topic');
        $result = $msgSystem->despatch($email, $msg, $topic);
        if (! $user) {
            $this->context->setError($msgSystem->getError());
            return false;
        }
        $context->addParam("user", $user);
        return true;
    }
}
