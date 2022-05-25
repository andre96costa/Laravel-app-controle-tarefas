# Projeto App controle tarefas
[![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)](https://shields.io/)
![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![GitHub](https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Udemy](https://img.shields.io/badge/Udemy-A435F0?style=for-the-badge&logo=Udemy&logoColor=white)

O projeto App controle tarefas foi criado com propósito de aprendizado, através do curso [Desenvolvimento Web Avançado 2022 com PHP, Laravel e Vue.JS
](https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/), utilizando a framework Laravel e a biblioteca UI, que permitiu o uso do Bootstrap css e scaffolding de autorização. Nesse projeto foi possivel ter um aprendizado inicial de como utilizar ferramentas de frontend para melhorar o design do projeto, como também utilizar o pacote de autenticação básico do laravel, ainda foi ensinado como fazer envio de e-mail, trabalhar com arquivos XML e PDF.

### INSTALAÇÃO LARAVEL UI
Pacote do laravel ui via composer
```bash
composer require laravel/ui
```
Utilizando o bootstrap e autenticação
```bash
php artisan ui bootstrap --auth
```
Depencencias do package json e executar o bundle para gerar os assets do front-end
```bash
npm install && npm run dev
```
Documentação oficial [Laravel UI](https://github.com/laravel/ui)

### INSTALAÇÃO LARAVEL EXCEL
Pacote do laravel excel
```bash
composer require maatwebsite/excel
```
Documentação oficial [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/installation.html)

### INSTALAÇÃO LARAVEL DOMPDF
Pacote do laravel DOMPDF
```bash
composer require barryvdh/laravel-dompdf
```
Adicionar o Facade no arquivo `config/app.php`
```php
'aliases' => [

    ...
    'PDF' => Barryvdh\DomPDF\Facade\Pdf::class,
],
```
Documentação oficial [Laravel DOMPDF](https://github.com/barryvdh/laravel-dompdf)

### Certificado de conclusão do curso 
> curso ainda em andamento