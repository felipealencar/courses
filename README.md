# Tópicos Especiais — Blockchain & Machine Learning

> Disciplina ministrada pelo **prof. Felipe Alencar** no
> **IFAL — Campus Arapiraca**.
> Esta branch faz parte do repositório [`courses`](https://github.com/felipealencar/courses)
> (organizado por branches). Veja o [índice de disciplinas](https://github.com/felipealencar/courses/tree/master).

Tópicos emergentes da computação abordados de forma prática, em dois módulos:
**Blockchain** e **Machine Learning** com JavaScript.

## Ementa

### Módulo 1 — Blockchain (`special-topics/blockchain`)

- Estrutura de um bloco e encadeamento criptográfico (`block.js`, `block-1-10.js`).
- Construção de uma blockchain do zero (`blockchain.js`).
- Validação da cadeia e testes (`test.js`).

### Módulo 2 — Machine Learning (`special-topics/machine-learning`)

| Aula | Tema | Destaques |
| --- | --- | --- |
| `lec-08` | Introdução a ML no navegador | `index.html` |
| `lec-11` | Classificação com árvores de decisão | `ml-cart`, dataset Iris |
| `lec-14` | Rede neural classificadora | `classificador.js`, dataset Iris |
| `lec-15` | Classificação de imagens | TensorFlow.js, `script.js` |

## Pré-requisitos

- JavaScript e Node.js (ver disciplina
  [`javascript-advanced`](https://github.com/felipealencar/courses/tree/javascript-advanced)).

## Ambiente e execução

Aulas baseadas em Node usam `npm`:

```bash
cd special-topics/machine-learning/lec-11
npm ci
node classificador_iris.js
```

Aulas com `index.html` (ML no navegador) podem ser abertas diretamente ou
servidas localmente:

```bash
npx serve special-topics/machine-learning/lec-15
```

## Como obter o código

```bash
git clone -b special-topics git@github.com:felipealencar/courses.git
```
