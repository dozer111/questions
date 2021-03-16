<?php

declare(strict_types=1);

interface MediaFIleRepositoryInterface
{
    public function getOne(MediaFileSpecification $specification): MediaFile;
}