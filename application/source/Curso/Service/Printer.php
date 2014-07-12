<?php
namespace Curso\Service;

class Printer
{
    public function putOnTheScreen(PrintableInterface $printable)
    {
        $info = $printable->getInfo();
        $html = array(
            '<fieldset>',
            "<legend>{$info['title']}</legend>",
            "<ul>"
        );
        unset($info['title']);
        foreach($info as $line){
            $html[] = "<li>{$line}</li>";
        }
        $html[] = '</ul></fieldset>';
        echo implode('',$html);
    }
}