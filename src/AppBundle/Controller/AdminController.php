<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 10.03.16
 * Time: 11:36
 */

namespace AppBundle\Controller;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class AdminController  extends BaseAdminController{

    protected function prePersistEntity($entity)
    {
        $entityClass = get_class($entity);

        $user = $this->getUser();
        if($entityClass == 'AppBundle\Entity\Product'){
            $entity->setPoster($user->getUserName());
            $entity->setCreated('');
        }

    }

} 