# Documentação do Miniframework PHP MVC

## Introdução
Este é um miniframework simples em PHP baseado no padrão de arquitetura MVC (Model-View-Controller). Ele é projetado para facilitar o desenvolvimento web de forma estruturada e organizada.

## Estrutura de Diretórios
```bash
miniframework/
|-- app/
|   |-- controllers/
|   |   |-- IndexController.php
|   |-- models/
|   |   |-- Info.php
|   |   |-- Produto.php
|   |-- views/
|   |   |-- index/
|   |   |   |-- index.php
|   |   |   |-- sobreNos.php
|   |   |-- layout1.php
|   |   |-- layout2.php
|   |-- Connection.php
|   |-- Route.php
|-- public/
|   |-- .htaccess
|   |-- index.php
|-- vendor/
|   |-- composer/
|   |-- MF/
|   |   |-- Controller/
|   |   |   |-- Action.php
|   |   |-- Init/
|   |   |   |-- Bootstrap.php
|   |   |-- Model/  
|   |   |   |-- Container.php
|   |   |   |-- Model.php
|   |-- autoload.php
|-- composer.json
|-- composer.lock
|-- composer.phar
|-- LICENSE
|-- README.md
```

- **App**: Contém os controladores, modelos e visualizações da aplicação.
- **public**: Arquivos acessíveis publicamente (CSS, JS, etc.).
- **.htaccess**: Configurações para URLs amigáveis.
- **composer.json**: Arquivo de configuração do Composer.
- **README.md** : Este arquivo de documentação.

### Diretório app
- Contém os **componentes principais** da aplicação.
- **Controllers/**: Controladores responsáveis por gerenciar as requisições e interagir com os modelos e visualizações.
- **Models/**: Modelos que representam a lógica de negócios da aplicação.
- **Views/**: Visualizações que exibem a interface do usuário.
- **Route.php**: Configuração de rotas para direcionar as requisições aos controladores apropriados.
- **Connection.php**: Configuração de rotas para conexão com o banco de dados.

### Diretório public

- Contém os **arquivos acessíveis** publicamente.
- **.htaccess**: Configurações para URLs amigáveis.
- **index.php**: Ponto de entrada da aplicação.

### Diretório Vendor

- **vendor/**: Diretório gerado pelo Composer, contendo dependências.
- **MF/**: Namespace do Miniframework.
  - **Controller/**: Contém classes relacionadas aos controladores.
    - **Action.php**: Classe base para ações do controlador.
  - **Init/**: Inicialização do framework.
    - **Bootstrap.php**: Classe para inicialização e configuração.
  - **Model/**: Contém classes relacionadas aos modelos.
    - **Container.php**: Contêiner de injeção de dependência.
    - **Model.php**: Classe base para modelos.

  - **autoload.php**: Arquivo de autoload gerado pelo Composer.

### Outros Arquivos
- **composer.json** e **composer.lock**: Arquivos de configuração do Composer.
- **composer.phar**: Executável do Composer.
- **LICENSE**: Informações sobre a licença de uso do Miniframework.
- **README.md**: Este arquivo de documentação.

## Configuração
1. Clone o repositório.
2. Execute composer install para instalar as dependências.
3. Configure seu servidor web para apontar para a pasta public.

