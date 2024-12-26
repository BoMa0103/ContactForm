<?php

    function dbInstance(){
        static $db ;
        
        if($db === null){
            $config = require dirname(__DIR__).'/../config.php';

            $db = new PDO(
                'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'],
                $config['db_user'],
                $config['db_pass'],
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            $db->exec('SET NAMES UTF8');
        }

        return $db;

    }

    function dbQuery(string $sql, array $params = []) : PDOStatement {
        $db = dbInstance();
        $query = $db->prepare($sql);
        $query->execute($params);
        return $query;
    }

?>