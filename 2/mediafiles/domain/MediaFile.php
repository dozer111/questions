<?php

declare(strict_types=1);

final class MediaFile
{
    private MediaFileId $id;
    private MediaFilesTypeInterface $type;

    public function __construct(
        MediaFileId $id,
        MediaFilesTypeInterface $type
    )
    {
        $this->id = $id;
        $this->type = $type;
    }

    public function getId(): MediaFileId
    {
        return $this->id;
    }

    public function getType(): MediaFilesTypeInterface
    {
        return $this->type;
    }

    public function isVideo(): bool
    {
        return $this->getType() === 'video';
    }

    public function isImage()
    {
        return $this->getType() === 'image';
    }
}