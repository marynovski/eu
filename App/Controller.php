<?php


namespace App;


class Controller
{
    protected function renderView(string $templateFileName, $options = []): array
    {
        return [ 'template' => $templateFileName, 'options'  => $options ];
    }
}