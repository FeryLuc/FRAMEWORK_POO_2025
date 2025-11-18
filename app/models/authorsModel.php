<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connection, int $limit = 9): array
{
    $sql = 'SELECT * FROM authors ORDER BY created_at DESC LIMIT :limit';
    $rs = $connection->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
