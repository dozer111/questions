<?php

declare(strict_types=1);

final class Video implements MediaFilesTypeInterface
{
    public function value(): string
    {
        return 'video';
    }
}