<?php
function render(string $tpl, ?array $data = []): string
{
    //?array te puedo pasar un array o no es opcional
    //sirve para que me imprima las plantillas en cada pagina

    if ($data) {
        extract($data, EXTR_OVERWRITE);
    }

    ob_start();
    require '../src/template/' . $tpl . '.tpl.php';

    $rendered = ob_get_clean();
    return (string)$rendered;
}
