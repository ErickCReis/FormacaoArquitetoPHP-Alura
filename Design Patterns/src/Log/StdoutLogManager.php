<?php

namespace Alura\DesignPatterns\Log;

class StdoutLogManager extends LogManager
{
    function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}