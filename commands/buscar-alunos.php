<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList*/
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\n\n";
}

$elvis = $alunoRepository->find(2);
echo $elvis->getNome() . PHP_EOL;

$bob = $alunoRepository->findOneBy(['nome' => 'Elvis Presley']);
echo $bob->getNome() . PHP_EOL;
