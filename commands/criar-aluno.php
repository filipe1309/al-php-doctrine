<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome('Bob Dylan');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// Doctrine comeca a observar esta entidade
$entityManager->persist($aluno);
$aluno->setNome('Bob Dylan 2');

// Persist
$entityManager->flush();

