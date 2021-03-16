<?php

declare(strict_types=1);

/**
 * Некий класс в другом контексте, который
 */
final class MainImage
{
    /**
     * Сами доменные классы ведь типа "видны" между контекстами, верно?
     * Не видно всё что НЕ_доменный слой (за исключением портов)
     */
    private MediaFileId $id;

    private string $size;

    public function __construct(
        MediaFileId $id,
        string $size
    )
    {
        $this->id = $id;
        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getId(): MediaFileId
    {
        return $this->id;
    }
}