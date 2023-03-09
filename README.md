<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
  <a href="https://www.linkedin.com/in/realeliakim/">
    <img alt="Linkedin" src="https://img.shields.io/badge/-Eliakim%20Aquino-0e76a8?label=Linkedin&logo=linkedin&style=flat-square"/>
  </a>
</p>

## About The Project

Tela de checkout com frontend em Vue e api em Laravel. Ultilizando Docker para subir container.

## :computer: Instalação

```bash
# Clone este repositório.
$ git clone git@github.com:realeliakim/laravel-vue-docker.git

# Vai para a pasta do projeto
$ cd pipedrive_bling

# Adicionar dependências
$ composer install

$ npm install && npm run dev

# Executar migrations e seeds
$ php artisan migrate

$ php artisan db:seed --class=ProductSeeder

# Subir container no endereço: http://127.0.0.1:8000/
$ docker-composer up -d

```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
