Webhooks
========

Esse repositório carrega informações sobre um tópico aprendido nas dailys técnicas da FACE digital sobre o conceito de webhooks.

Para esse projeto nós utilizamos algumas ferramentas externas além de PHP como linguagem base para mostrar o funcionamento de:

- **Sender**
    Geralmente aplicação responsável por fazer o envio das informações para um determinado endpoint, geralmente o endereço onde o receiver está aguardando

- **Receiver**
    Responsável por receber as informações disponibilizadas pelo sender, geralmente existe um contrato em JSON definido entre as partes para tratamento dos dados carregados.

Outras soluções que foram utilizadas:

- [PHP Server BuiltIn](https://www.php.net/manual/pt_BR/features.commandline.webserver.php)
    Para rodar o projeto utilizamos o seguinte comando dentro da pasta desse projeto: 
```sh
$ php -S 0.0.0.0:8000
```

- [Localtunnel](https://github.com/localtunnel/localtunnel)
    Para externalizar o endereço e publicar na web, utilizamos o localtunnel com o seguinte comando:
```sh
$ ~/.yarn/bin/lt -p 8000 -s webhooks
```

---

Enjoy and have fun!

;)