## 📘 Login com Sessions + Tema com Cookies (PHP)

Este projeto é um exemplo prático em PHP que demonstra:

🔐 Autenticação de usuários utilizando Sessions
🎨 Persistência de tema (claro/escuro) utilizando Cookies

Ideal para quem está aprendendo conceitos básicos de backend com PHP.

## 📁 Estrutura do Projeto

/login-exemplo/

│
├── login.php          # Formulário de login

├── validar.php        # Processa o login

├── dashboard.php      # Página protegida

├── sair.php           # Finaliza sessão

/tema-com-cookies/

├── index.php          # Página principal

├── set_tema.php       # Define o tema via cookie

└── style.css          # Estilos dos temas

<img width="620" height="504" alt="image" src="https://github.com/user-attachments/assets/13df4151-f1b6-4f2f-bacf-c9aba4c49918" />
<img width="619" height="359" alt="image" src="https://github.com/user-attachments/assets/7a98009c-e6d6-4871-b199-6d52246a4b84" />


## 🔐 Funcionalidade: Login com Sessions
## ✔️ login.php

Página com formulário de login onde o usuário informa:

Usuário
Senha
## ✔️ validar.php

Responsável por:

Validar as credenciais
Criar uma sessão com $_SESSION
Redirecionar para dashboard.php se sucesso
Retornar ao login se erro
## ✔️ dashboard.php

Página protegida
Só acessível se o usuário estiver autenticado
Caso contrário, redireciona para o login
## ✔️ sair.php

Destroi a sessão com session_destroy()
Redireciona para a tela de login
## 🎨 Funcionalidade: Tema com Cookies

## ✔️ index.php

Página principal
Lê o cookie tema
Aplica o estilo (claro ou escuro)
## ✔️ set_tema.php

Define o cookie tema
Valores possíveis:
light
dark
Redireciona de volta para index.php
## ✔️ style.css

Contém estilos para:

Tema claro ☀️

Tema escuro 🌙

## ⚙️ Como Executar

Instale um servidor local:
XAMPP, WAMP ou Laragon
Coloque o projeto na pasta htdocs (ou equivalente)
Acesse no navegador:

## http://localhost/login-exemplo/login.php
## http://localhost/tema-com-cookies/index.php

## 🧠 Conceitos Utilizados

## 🔐 Sessions

Armazenadas no servidor
Usadas para manter o usuário logado
Exemplo:
$_SESSION['usuario'] = 'admin';

## 🍪 Cookies

Armazenados no navegador
Usados para preferências do usuário
Exemplo:
setcookie('tema', 'dark', time() + 3600);

## 🎯 Objetivo

Este projeto foi criado para fins educacionais e ajuda a entender:

Controle de acesso com PHP
Persistência de dados entre páginas
Diferença entre Cookies e Sessions
Estrutura básica de aplicações web

## ⚠️ Boas Práticas (Produção)

Para uso real, considere:

🔒 Senhas seguras com password_hash()
🛡️ Proteção contra CSRF e XSS
🗄️ Uso de banco de dados (MySQL, PostgreSQL)
🔑 Validação e sanitização de dados

## 👨‍💻 Autor
aldreyfrancielle@gmail.com

Projeto simples para estudo e prática de PHP.
