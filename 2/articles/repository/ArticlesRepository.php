<?php

declare(strict_types=1);

final class ArticlesRepository
{
    public function getOne()
    {
        /**
         * Теперь, в моём понимании, это яркий пример, как имея адаптер GetMainImage
         * я могу связать ОК articles с ОК mediaFiles
         *
         * GetMainImage проверит, что тот файл - картинка
         * затем, сделает под нас обьект MainImage
         *
         * и здесь, мы уже пользуемся результатами трудов этой парочки
         */

        /// $data = Query->select....->all()
        /// $entity = Instantiator::instantiate....

        /// $getImage = Yii::$container->get(GetMainImage::class);
        /// $image = $getImage->getOne($data['imageId']);
        /// $data['image'] = $image;


        /// $this->hydrator($entity,$data)
        /// return $entity;
    }
}