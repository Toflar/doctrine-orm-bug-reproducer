<?php

include_once 'bootstrap.php';

$child1 = new \App\ChildEntity();
$child2 = new \App\ChildEntity();
$child2->setOrigin($child1);

$parent = new \App\ParentEntity();
$parent->addChild($child1)->addChild($child2);

$entityManager->persist($parent);
$entityManager->flush();

$parent = $entityManager->find(\App\ParentEntity::class, $parent->getId());
$entityManager->remove($parent);
$entityManager->flush();



