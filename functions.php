<?php

    //функция записи в лог для отладки
    function tolog($data) {
        if (!is_readable('log.txt')) {
            file_put_contents("log.txt", "");
        }
        $logdata = file_get_contents("log.txt", TRUE);
        $data = (string)$data;
        $logdata .= strftime("%c", time()) . " >> " . $data . ";\r\n";
        file_put_contents("log.txt", $logdata);
    }
    
