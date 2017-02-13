<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Ubooks

> Plataforma para incentivar o hábito à leitura através de troca de livros entre usuários da plataforma.

# Como contribuir com o desenvolvimento

    * Faça um fork do repositório
    * Faça suas alterações no seu repositório
    * Envie um pull request
    
# Como instalar?

Se você estiver utilizando uma distribuição Ubuntu ou Debian, precisará instalar alguns pacotes:

```sh
 $ sudo apt-get update
 $ sudo apt-get install nodejs
 $ sudo apt-get install npm
```

#### Precisamos fazer o download do nosso código fonte, então digite:
```sh
 $ git clone https://github.com/juniorpaiva95/projeto-extensao-ifpb.git
```

A plataforma utiliza a linguagem PHP e o Web Framework Laravel portanto é necessário possuir os seguintes requerimentos:
* Wamp ou Xampp
* PHP >= 5.6.4


O Laravel utiliza o [Composer](https://getcomposer.org) para gerenciar suas dependências. Portanto, antes de usar o Laravel, certifique-se de ter o Composer instalado em sua máquina.

Após fazer o download do composer, faça o download globalmente do laravel com o seguinte comando.
```
 $ composer global require "laravel/installer"
```
        

Pronto, agora vá até o seu repositório local e abra com o terminal executando o seguinte comando para startar o servidor

# Como começar

Entre no diretório do projeto
```sh
$ cd projeto-extensao-ifpb
```
Rode o seguinte comando para startar o servidor
```sh 
php artisan serve
```
Por default o servidor utiliza a porta `8000` mas pode ser facilmente alterado com a flag  `--port=` caso queira mudar a porta. 
```
php artisan serve --port=1234
```
Pronto, agora é possível ver o projeto rodando através do link [http://localhost:8000/](http://localhost:8000/) ou troque o `8000` pela porta utilizada.

### Desenvolvimento

Vamos contribuir ? Ótimo!
Laravel em sua versão 5.4 que é a que utilizamos nesse projeto, por padrão inicializa com os seguintes packages front-end:
```javascript
{
    "devDependencies": {
        "axios": "^0.15.3",
        "bootstrap-sass": "^3.3.7",
        "jquery": "^3.1.1",
        "laravel-mix": "^0.7.2",
        "lodash": "^4.17.4",
        "vue": "^2.1.10"
    }
}
```
Ao entrar no diretório rode outro comando para instalar todos os pacotes que a aplicação irá utilizar com o comando:
```
 $ npm install
```

Pronto agora que você baixou os pacotes do nodeJs rode o comando:
```
 $ npm run watch
```
Este comando irá observar todas as alterações em seu front e irá compilar automaticamente.
