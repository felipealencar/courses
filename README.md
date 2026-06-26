# courses — prof. Felipe Alencar

> 🇧🇷 [Leia em português](README.pt-BR.md)

Repository with textbooks, slides and source code for the courses I teach.

The repository is **organized by branches**: each course lives in its own
branch and has a `README.md` that works as a **syllabus/teaching plan**,
describing the content lesson by lesson along with the instructions to run it.

## Courses

| Course | Branch | Syllabus |
| --- | --- | --- |
| Web Programming (HTML, CSS and JS) | `pweb-html-css-js` | [view syllabus](https://github.com/felipealencar/courses/tree/pweb-html-css-js) |
| Basic PHP | `php-basic` | [view syllabus](https://github.com/felipealencar/courses/tree/php-basic) |
| Advanced PHP | `php-advanced` | [view syllabus](https://github.com/felipealencar/courses/tree/php-advanced) |
| Advanced JavaScript | `javascript-advanced` | [view syllabus](https://github.com/felipealencar/courses/tree/javascript-advanced) |
| Inteligência Artificial (Portuguese) | `inteligencia-artificial` | [view syllabus](https://github.com/felipealencar/courses/tree/inteligencia-artificial) |
| Artificial Intelligence | `artificial-intelligence` | [view syllabus](https://github.com/felipealencar/courses/tree/artificial-intelligence) |
| Special Topics (Blockchain & Machine Learning) | `special-topics` | [view syllabus](https://github.com/felipealencar/courses/tree/special-topics) |
| Software Development Process | `software-development-process` | [view syllabus](https://github.com/felipealencar/courses/tree/software-development-process) |
| Introduction to Computer Networks | `computer-networks-intro` | [view syllabus](https://github.com/felipealencar/courses/tree/computer-networks-intro) |

> The `gitpod` branch keeps the environment configuration (Dockerfile/Gitpod)
> shared across the courses.

## Cloning a specific course

Since the repository is organized by branches, each course has its own branch.

```bash
git clone -b <branch-name> git@github.com:felipealencar/courses.git
```

Example — Basic PHP course:

```bash
git clone -b php-basic git@github.com:felipealencar/courses.git
```

## Gitpod support

Some branches include a `.gp` directory (_work in progress_) with the
environment definition (Dockerfile) considering the language and libraries used
in the corresponding course.

## Students and contributors

[@Manuel-Antunes](https://github.com/Manuel-Antunes)
