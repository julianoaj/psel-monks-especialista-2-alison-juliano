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

Este projeto foi desenvolvido para um case de processo seletivo para a empresa Monks. As tecnologias utilizadas foram: 

- **Back-end:** PHP, Docker, Nginx, MySQL, TypeScript e JavaScript.

- **Front-end:** Vue.js, Tailwind e daisyUI.

---

# Requisitos

- [NodeJS/npm](https://nodejs.org/en/download)
- [Docker/Docker Compose](https://www.docker.com/get-started)

> **Recomendado:**  
> [Composer](https://yarnpkg.com/getting-started/install)

---

# Inicialização do Projeto

Siga os passos abaixo para configurar o ambiente:

1. **Clone o Repositório**  
   Faça o clone do projeto para sua máquina local.


2. **Construa os Containers do Docker**

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

# Observações

- `Volumes Docker`: Se um volume estiver mapeado no seu `docker-compose.yml`, os arquivos gerados durante a build (como o diretório vendor) podem ficar ocultos ou serem sobrescritos pela pasta do host. Verifique a configuração dos volumes se precisar preservar esses arquivos.


- `Configuração de Ambiente`: Certifique-se de atualizar os arquivos de configuração para atender aos requisitos específicos do seu ambiente.
