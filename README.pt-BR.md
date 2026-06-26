# courses — prof. Felipe Alencar

> 🇺🇸 [Read in English](README.md)

Repositório com livros-texto, slides e códigos das disciplinas que ministro no
**Instituto Federal de Alagoas (IFAL) — Campus Arapiraca**.

O repositório é **organizado por branches**: cada disciplina vive em sua própria
branch e possui um `README.md` que funciona como **ementa/plano de ensino**
(_syllabus_), descrevendo o conteúdo aula a aula e as instruções de execução.

## Disciplinas

| Disciplina | Branch | Ementa |
| --- | --- | --- |
| Programação para Web (HTML, CSS e JS) | `pweb-html-css-js` | [ver ementa](https://github.com/felipealencar/courses/tree/pweb-html-css-js) |
| PHP Básico | `php-basic` | [ver ementa](https://github.com/felipealencar/courses/tree/php-basic) |
| PHP Avançado | `php-advanced` | [ver ementa](https://github.com/felipealencar/courses/tree/php-advanced) |
| JavaScript Avançado | `javascript-advanced` | [ver ementa](https://github.com/felipealencar/courses/tree/javascript-advanced) |
| Inteligência Artificial | `inteligencia-artificial` | [ver ementa](https://github.com/felipealencar/courses/tree/inteligencia-artificial) |
| Artificial Intelligence (English) | `artificial-intelligence` | [view syllabus](https://github.com/felipealencar/courses/tree/artificial-intelligence) |
| Tópicos Especiais (Blockchain & Machine Learning) | `special-topics` | [ver ementa](https://github.com/felipealencar/courses/tree/special-topics) |
| Processo de Desenvolvimento de Software | `software-development-process` | [ver ementa](https://github.com/felipealencar/courses/tree/software-development-process) |
| Introdução a Redes de Computadores | `computer-networks-intro` | [ver ementa](https://github.com/felipealencar/courses/tree/computer-networks-intro) |

> A branch `gitpod` mantém a configuração de ambiente (Dockerfile/Gitpod)
> compartilhada entre as disciplinas.

## Clonando uma disciplina específica

Como o repositório é organizado por branches, cada disciplina tem sua própria branch.

```bash
git clone -b <branch-name> git@github.com:felipealencar/courses.git
```

Exemplo — disciplina de PHP Básico:

```bash
git clone -b php-basic git@github.com:felipealencar/courses.git
```

## Suporte a Gitpod

Algumas branches incluem um diretório `.gp` (_em progresso_) com a definição de
ambiente (Dockerfile) considerando a linguagem e as bibliotecas usadas na
disciplina correspondente.

## Alunos e colaboradores

[@Manuel-Antunes](https://github.com/Manuel-Antunes)
