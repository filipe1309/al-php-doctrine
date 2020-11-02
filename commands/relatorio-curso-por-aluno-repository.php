<?php

use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunosrepository = $entityManager->getRepository(Aluno::class);

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

$alunos = $alunosrepository->buscarCursosPorAluno();

foreach ($alunos as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone)
        {
            return $telefone->getNumero();
        })
        ->toArray();
    echo "Nome: {$aluno->getNome()}\n";
    echo 'Telefones: ' . implode(',', $telefones);
    echo "\n";

    $cursos = $aluno->getCursos();
    foreach ($cursos as $curso) {
        echo "\tID Curso: {$curso->getId()}\n";        
        echo "\tCurso: {$curso->getNome()}\n";
        echo "\n";
    }
    echo "\n";
}

echo "\n";

foreach ($debugStack->queries as $queryInfo) {
    echo $queryInfo['sql'] . "\n";
}