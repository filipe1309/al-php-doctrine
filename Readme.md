composer require doctrine/orm

composer dumpautoload

vendor/bin/doctrine

vendor/bin/doctrine orm:info

vendor/bin/doctrine orm:mapping:describe Aluno

vendor/bin/doctrine orm:schema-tool:create

php commands/criar-aluno.php

php commands/criar-aluno.php "Elvis Presley"

php commands/buscar-alunos.php

php commands/atualizar-nome-aluno.php 1 "Bob Dylan 3"

composer require doctrine/migrations

vendor/bin/doctrine-migrations 

vendor/bin/doctrine-migrations migrations:status

vendor/bin/doctrine-migrations migrations:diff

vendor/bin/doctrine-migrations migrations:migrate

php commands/criar-aluno.php "Bob Dylan" "1111-1111" "2222-2222"