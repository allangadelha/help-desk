<?php

function dataSQLtoPTbr($data_mysql = null)
{
    if (is_null($data_mysql)) {
        // $data = "2016-12-03 10:00:00";
        $data = date('Y-m-d');
    } else {
        $data = $data_mysql;
    }

    return date('d/m/Y', strtotime($data));
}

/**
 * @param $data recebe valor da data via formulário
 * @param $auxdata transforma $data no formato para ser enviado ao banco de dados
 * @return String que será gravada no banco de dados
 */
function dataPTbrToDb($data)
{
    $auxdata = strtotime($data);
    return date('Y-m-d H:i:s', $auxdata);
    //2016-02-23 20:02:46
}

function UrlAtual() {
    $dominio = $_SERVER['HTTP_HOST'];
    $url = "http://" . $dominio . $_SERVER['REQUEST_URI'];
    return $url;
}