<?php

declare(strict_types=1);

/**
 * Адаптер для ОК mediaFiles
 */
final class GetMainImage
{
    private GetMediafiles $getFiles;

    public function __construct(GetMediafiles $getFiles)
    {
        $this->getFiles = $getFiles;
    }

    public function getMainPage(MediaFileId $id): MainImage
    {

        $file =  $this->getFiles->getOne($id);
        if(!$file->isImage())
        {
            throw new Exception('Какая-то муть, ожидал здесь увидеть ИМЕННО картинку');
        }

        $mainImage = new MainImage(
            $file->getId(),
            $file->getType()->getSize(),
        );

        return $mainImage;
    }
}