# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start

Run this command to run the test suite

	php composer.phar test

That's it! Now go build something cool.


Esse código foi utilizado para a criação do curso [Slim Framework - Api RESTful](https://www.schoolofnet.com/curso/php/outros-frameworks-php/slim-framework-api-restful/) da School of Net.

A School of Net é uma escola online que ensina as mais diversas tecnologias no mundo da programação, desenvolvimento web, games, design e infraestrutura.

School of Net - [https://www.schoolofnet.com](https://www.schoolofnet.com)

Blog da School of Net - [https://blog.schoolofnet.com](https://blog.schoolofnet.com)

SONCast - Podcast da School of Net - [https://podcast.schoolofnet.com](https://podcast.schoolofnet.com)

Canal da School of Net no Youtube: [http://www.youtube.com/c/SchoolofNetCursos](http://www.youtube.com/c/SchoolofNetCursos)