<?php

    require_once dirname(__DIR__).'\core\db.php';
    define("TABLE_NAME", 'articles');

    function getArticles() : array {
        $sql = "SELECT * FROM " . TABLE_NAME . " ORDER BY id DESC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    function saveArticle(array $data): void {
        $sql = "INSERT INTO articles (name, surname, patronymic, email, phone, age, history)" .
            "VALUES (:name, :surname, :patronymic, :email, :phone, :age, :history)";

        dbQuery($sql, $data);
    }
?>