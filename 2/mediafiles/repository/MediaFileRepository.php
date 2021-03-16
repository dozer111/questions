<?php

declare(strict_types=1);

/**
 * По хорошему, в чистую впредь, этот репозиторий лучше не использовать, тк
 * он типа скрытый внутри контекста
 */
final class MediaFileRepository
{
    public function getAll()
    {
        $data = [
            1 => ['image','someUrl/111222'],
            2 => ['image','someUrl2/111222'],
            3 => ['video','someUrl3/111222'],
            4 => ['video','someUrl4/111222'],
            5 => ['image','someUrl5/111222'],
            6 => ['image','someUrl6/111222'],
            7 => ['image','someUrl7/111222'],
        ];
    }
}