<?php

declare(strict_types=1);

/**
 * ПОРТ
 *
 * Его главная задача - чтобы любой другой ОК получал данные
 * а не с MediaFilesRepository потому что:
 * 1) MFR - конкретная реализация
 * 2) MFR - закрыта внутри контекста MediaFiles, и по хорошему, никто её типа не видит извне
 */
final class GetMediafiles
{
    /**
     * Здесь намеренно делаю зависимость от интерфейса,
     * потому что dependency inversion => детали должны зависеть от абстракций
     */
    private MediaFIleRepositoryInterface $repository;

    public function __construct(MediaFIleRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOne(MediaFileId $id): MediaFile
    {
        $specification = new MediaFileSpecification();
        $specification->setId($id);

        return $this->repository->getOne($specification);
    }
}