<?php

namespace App\DTO;

class CommentDTO implements EntityDTO
{
    public static function toJsonLight($entity): array
    {
        return [
            'id'           => $entity->getId(),
            'content'      => $entity->getContent(),
            'rate'         => $entity->getRate(),
            'created_date' => $entity->getCreateDate()->getTimestamp(),
        ];
    }

    public static function toJsonFull($entity): array
    {
        return self::toJsonLight($entity);
    }
}