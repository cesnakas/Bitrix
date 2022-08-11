<?php

\Bitrix\Main\EventManager::getInstance()->addEventHandler('main', 'OnEndBufferContent', 'htmlMinify');

function htmlMinify(&$buffer)
{
    if (!$GLOBALS["USER"]->IsAdmin()) {
        $buffer = preg_replace(
            [
                '/\>[^\S ]+/s',
                '/[^\S ]+\</s',
                '/(\s)+/s',
                '/<!--(?![^<]*noindex)(.*?)-->/'
            ],
            [
                '>',
                '<',
                '\\1',
                ''
            ],
            $buffer
        );
    }
}
