<?php

declare(strict_types=1);

final class Article
{
    private ArticleId $id;
    private string $text;
    private MainImage $mainImage;

    public function __construct(
        ArticleId $id,
        string $text,
        MainImage $mainImage
    )
    {
        $this->id = $id;
        $this->text = $text;
        $this->mainImage = $mainImage;
    }

    public function getId(): ArticleId
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getMainImage(): MainImage
    {
        return $this->mainImage;
    }
}