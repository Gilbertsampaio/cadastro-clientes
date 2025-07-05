# 📋 Sistema de Cadastro de Clientes - CodeIgniter 4

Este é um sistema básico de cadastro de clientes desenvolvido com **CodeIgniter 4**, utilizando o padrão **MVC**, com foco em organização, responsividade e facilidade de uso.

---

## ⚙️ Requisitos do Projeto

- **CodeIgniter**: versão 4.0  
- **XAMPP**: versão 3.2.4 (com PHP 7.x)  
- **Bootstrap**: versão 5 para layout responsivo  
- **Extensão PHP**: `intl` (necessária para o funcionamento do CodeIgniter 4)

---

## 🧩 Funcionalidades

- ✅ Criar novo cliente  
- ✅ Editar cliente existente  
- ✅ Excluir cliente  
- ✅ Listar clientes com:
  - Nome
  - E-mail
  - Telefone
  - Miniatura da foto
- ✅ Upload de imagem para `public/uploads/`
- ✅ Validações frontend com JavaScript e backend com CodeIgniter
- ✅ Estrutura completa com padrão MVC

---

## 🚀 Como iniciar o projeto

1. Abra o terminal na raiz do projeto
2. Execute o seguinte comando:

```bash
php spark serve
```

---

## 🌐 Acesse o sistema

[http://localhost/cadastro-clientes/public/](http://localhost/cadastro-clientes/public/)

---

## 🛠️ Habilitar a extensão `intl` no XAMPP (se necessário)

1. Abra o arquivo `php.ini`, geralmente em:  
   `C:\xampp\php\php.ini`

2. Procure pela linha:

```ini
;extension=intl
```

3. Remova o ponto-e-vírgula para habilitar:

```ini
extension=intl
```

4. Salve o arquivo e reinicie o Apache no painel do XAMPP.
5. Verifique no terminal se a extensão foi ativada:

```bash
php -m | findstr intl
```

Se aparecer `intl`, está tudo certo!

---

## 📁 Estrutura de pastas recomendada

Dentro da pasta do projeto, crie a seguinte estrutura:

```
cadastro-clientes/
└── writable/
    ├── cache/
    ├── logs/
    ├── session/
    └── uploads/
```

### 🔒 Permissões

Garanta que essas pastas tenham permissão de escrita.  
Em ambientes Linux:

```bash
chmod -R 777 writable/
```

---

## 🧰 Bibliotecas e recursos externos utilizados

- [Bootstrap 5.3](https://getbootstrap.com/)
- [Bootstrap Icons](https://icons.getbootstrap.com/)
- [GLightbox](https://biati-digital.github.io/glightbox/) – para lightbox de imagens
- [jQuery](https://jquery.com/) – para validações e interações no formulário

---

## ✅ Resultado Final

Um sistema funcional, moderno, leve e fácil de manter para gerenciar clientes com:

- ✅ Responsividade
- ✅ Upload e exibição de fotos
- ✅ Validações client-side e server-side
- ✅ Código limpo e organizado

---

## Todos os demais menus e links criados são meramente ilustrativos

## 👨‍💻 Desenvolvido com 💻 e ☕ por **Gilbert Sampaio**
