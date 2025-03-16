<div align="center">
      <a href="https://alisonjuliano.com">
        <img src="https://imgur.com/13kinqs.jpg" alt="logo">
    </a>
  <p>
    <p style="font-style: italic;">"I decided to follow the path of rabbit hole, let's see how far this can take us" 
    </p>
    <p style="font-weight: bold;">Sharing, learning and knowing people all around the world. Let's code!</p>
    <a href="https://alisonjuliano.com"> 
    <img src="https://img.shields.io/static/v1?label=Fullstack&message=AJ&color=64ffda&style=for-the-badge&logo=dungeonsanddragons" alt="fullstack">
    </a>
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="php">
    <img src="https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white" alt="docker">
    <img src="https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white" alt="nginx">
    <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="mysql">
    <img src="https://img.shields.io/badge/TypeScript-2F74C0?style=for-the-badge&logo=typescript&logoColor=white" alt="ts">
    <img src="https://img.shields.io/badge/Javascript-EFD81D?style=for-the-badge&logo=javascript&logoColor=white" alt="js">
  </p>
</div>

## Sobre o projeto

Esse projeto foi desenvolvido para o case de um processo seletivo para empresa Monks. Tecnlogias utilizadas no back-end: 

- PHP, Docker, Nginx, MySQL, TypeScript e JavaScript.

Para o desenvolvimento front-end foi utilizado: 

- Vue.js, Tailwind e daisyUI.

## Requerimentos

- [NodeJS/npm](https://nodejs.org/en/download)
- [Docker/Docker composer](https://www.docker.com/get-started/)

### Recomendado

- [Composer](https://yarnpkg.com/getting-started/install)

## Inicializando o projeto

1. Clone o repositório

2. Prepare o ambiente para os containers do docker. Abra o terminal e navegue até a pasta do projeto. Rode o comando:

```bash
docker-compose build
```
3. Inicie os containers do docker: (certifique-se de que as portas 80, 3306 e 9000 estão disponíveis)

```bash
docker-compose up -d
```

4. Instale as dependências do projeto:

Npm:
```bash
npm install
```
Composer (caso tenha instalado):
```bash
composer update --no-dev --optimize-autoloader
```
ou rode o composer dentro do container do php:

```bash
docker-compose run --rm php composer update --no-dev --optimize-autoloader
```
5. Acesse o seu localhost pelo navegador: [http://localhost](http://localhost)

## Arvore de diretórios

📂 MyProject
├── 📂 app                # Source code
│   ├── 📂 Facades     # UI Components
│   ├── 📂 Http          # Helper functions
│   ├── 📜 index.js       # Main entry file
│   └── 📜 app.js         # App initialization
├── 📂 public             # Static assets
├── 📂 tests              # Unit & integration tests
├── 📜 package.json       # Dependencies & scripts
├── 📜 README.md          # Project documentation
└── 📜 .gitignore         # Ignored files

