<?php

declare(strict_types=1);

/**
 * Допустим, что мне ИСКЛЮЧИТЕЛЬНО в этом контексте в этой сущности нужны такие аттрибуты
 */
final class Image implements MediaFilesTypeInterface
{
    private string $title;
    private string $description;
    private string $size;
    private string $createdAt;
    private ?string $updatedAt;

    public function __construct(
        string $title,
        string $description,
        string $size,
        string $createdAt,
        string $updatedAt = null
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->size = $size;
        $this->createdAt=  $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function value(): string
    {
        return 'image';
    }
}