# PHP Básico

> Disciplina ministrada pelo **prof. Felipe Alencar** no
> **IFAL — Campus Arapiraca**.
> Esta branch faz parte do repositório [`courses`](https://github.com/felipealencar/courses)
> (organizado por branches). Veja o [índice de disciplinas](https://github.com/felipealencar/courses/tree/master).

Introdução ao desenvolvimento web no lado do servidor com **PHP**, da sintaxe
básica à construção de uma aplicação em arquitetura **MVC** com acesso a banco
de dados **MySQL**.

## Ementa (conteúdo aula a aula)

| Aula | Tema |
| --- | --- |
| `lec-02` | Hello World com PHP |
| `lec-03` | Laços de repetição e comandos condicionais |
| `lec-04` | Formulário HTML e processamento em PHP |
| `lec-05` | PHP e conexão com banco de dados |
| `lec-06` | PHP e PDO |
| `lec-07` | Autoload e orientação a objetos |
| `lec-08` | Autoload e classes |
| `lec-09` | Introdução ao padrão MVC |
| `lec-10` / `lec-11` | MVC com DAO e abstração de banco de dados |
| `lec-12`–`lec-16` | Tópicos complementares e introdução ao Laravel |
| `loja-virtual` | Projeto integrador (loja virtual) |

## Pré-requisitos

- HTML básico.
- Lógica de programação.

## Ambiente e execução

Na raiz do repositório, suba o servidor embutido do PHP:

```bash
php -S localhost:8080
```

Acesse a aula desejada no navegador, por exemplo:

```
http://localhost:8080/php-basic/lec-02/index.php
```

Para executar mais facilmente, é possível usar a extensão **Gitpod** no
navegador: ao clicar no botão Gitpod, um ambiente **Apache + PHP + MySQL** é
configurado automaticamente.

> **Atenção:** em alguns ambientes Gitpod, o arquivo `mysql-bashrc-launch.sh`
> pode falhar ao ser executado automaticamente. Nesse caso, execute-o
> manualmente pelo terminal antes de usar exemplos que dependem do banco de
> dados.

## Como obter o código

```bash
git clone -b php-basic git@github.com:felipealencar/courses.git
```
