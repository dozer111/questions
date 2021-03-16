<?php

declare(strict_types=1);

final class MediaFileSpecification
{
    private MediaFileId $id;

    public function getId(): MediaFileId
    {
        return $this->id;
    }

    public function setId(MediaFileId $id): void
    {
        $this->id = $id;
    }

}