<?php

use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1];
$idCurso = $argv[2];

$curso = $entityManager->find(Curso::class, $idCurso);
$aluno = $entityManager->find(Aluno::class, $idAluno);

$aluno->addCurso($curso);
// OU $curso->addAluno($aluno);

// Persist
$entityManager->flush();

