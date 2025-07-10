# 💈 Site de Agendamento - Barbearia Reinaldo

Este é um sistema completo de agendamento de serviços desenvolvido com **PHP**, **MySQL** e **Bootstrap**. Ele permite que clientes agendem horários online e que o administrador acompanhe os agendamentos em um painel restrito.

---

## ✨ Funcionalidades

- Página inicial com navegação
- Lista de serviços disponíveis
- Formulário de agendamento
- Confirmação automática via WhatsApp
- Login do administrador
- Painel administrativo com listagem dos agendamentos

---

## 🖥️ Tecnologias Utilizadas

- PHP 7+
- MySQL
- Bootstrap 5.3
- HTML/CSS
- JavaScript básico

---

## 📦 Estrutura dos Arquivos

📁 site_agendamento/
├── index.html           # Página inicial
├── servicos.html        # Lista de serviços
├── agendamento.php      # Formulário e integração com WhatsApp
├── login.php            # Login do administrador
├── painel.php           # Painel de controle
├── logout.php           # Encerrar sessão
├── conexao.php          # Conexão com banco de dados
├── banco.sql            # Script de criação do banco

---

## 🔧 Como Usar

### 1. Instale em seu servidor (XAMPP, Hostinger, etc.)

### 2. Configure o banco de dados:

1. Crie um banco de dados chamado `agenda`
2. Importe o arquivo `banco.sql` via **phpMyAdmin**

### 3. Ajuste a conexão

No arquivo `conexao.php`, edite conforme seus dados:

```php
$host = 'localhost';
$usuario = 'SEU_USUARIO';
$senha = 'SUA_SENHA';
$banco = 'agenda';
```

### 4. Acesse as páginas:

- `index.html`: início do site
- `agendamento.php`: formulário de agendamento
- `login.php`: admin (`admin` / `1234`)
- `painel.php`: painel de controle

---

## ✅ Exemplo de confirmação via WhatsApp

Ao agendar, o cliente será redirecionado para o WhatsApp com a seguinte mensagem:

```
Olá, gostaria de confirmar meu agendamento para [DATA] às [HORA] para o serviço de [SERVIÇO].
```

---

## 📬 Contato

Desenvolvido por [Lucas Soares](https://github.com/Lucassoaresd)
