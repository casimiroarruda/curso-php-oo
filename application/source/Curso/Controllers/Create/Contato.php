<?php
namespace Curso\Controllers\Create;

use Respect\Rest\Routable;

class Contato implements Routable
{
    public function get()
    {
        $html = <<<HTML
<form action="/contato" method="post">
    <fieldset>
        <legend>Adicionar Usuario</legend>
        <dl>
            <dt>Nome</dt>
            <dd><input type="text" name="name" /></dd>
        </dl>
        <dl>
            <dt>Alias</dt>
            <dd><input type="text" name="alias" /></dd>
        </dl>
        <dl>
            <dt>Job</dt>
            <dd><input type="text" name="job" /></dd>
        </dl>
    </fieldset>
    <button type="submit">Salvar</button>
</form>
HTML;
    return $html;
    }
}