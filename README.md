# ?? Sistema de Cadastro de Clientes - CodeIgniter 4

Este � um sistema b�sico de cadastro de clientes desenvolvido com **CodeIgniter 4**, utilizando o padr�o **MVC**, com foco em organiza��o, responsividade e facilidade de uso.

---

## ?? Requisitos do Projeto

- **CodeIgniter**: vers�o 4.0  
- **XAMPP**: vers�o 3.2.4 (com PHP 7.x)  
- **Bootstrap**: vers�o 5 para layout responsivo  
- **Extens�o PHP**: `intl` (necess�ria para o funcionamento do CodeIgniter 4)

---

## ?? Funcionalidades

- ? Criar novo cliente  
- ? Editar cliente existente  
- ? Excluir cliente  
- ? Listar clientes com:
  - Nome
  - E-mail
  - Telefone
  - Miniatura da foto
- ? Upload de imagem para `public/uploads/`
- ? Valida��es frontend com JavaScript e backend com CodeIgniter
- ? Estrutura completa com padr�o MVC

---

## ?? Como iniciar o projeto

1. Abra o terminal na raiz do projeto
2. Execute o seguinte comando:

```bash
php spark serve
```

---

## ?? Acesse o sistema

[http://localhost/cadastro-clientes/public/](http://localhost/cadastro-clientes/public/)

---

## ??? Habilitar a extens�o `intl` no XAMPP (se necess�rio)

1. Abra o arquivo `php.ini`, geralmente em:  
   `C:\xampp\php\php.ini`

2. Procure pela linha:

```ini
;extension=intl
```

3. Remova o ponto-e-v�rgula para habilitar:

```ini
extension=intl
```

4. Salve o arquivo e reinicie o Apache no painel do XAMPP.
5. Verifique no terminal se a extens�o foi ativada:

```bash
php -m | findstr intl
```

Se aparecer `intl`, est� tudo certo!

---

## ?? Estrutura de pastas recomendada

Dentro da pasta do projeto, crie a seguinte estrutura:

```
cadastro-clientes/
??? writable/
    ??? cache/
    ??? logs/
    ??? session/
    ??? uploads/
```

### ?? Permiss�es

Garanta que essas pastas tenham permiss�o de escrita.  
Em ambientes Linux:

```bash
chmod -R 777 writable/
```

---

## ?? Bibliotecas e recursos externos utilizados

- [Bootstrap 5.3](https://getbootstrap.com/)
- [Bootstrap Icons](https://icons.getbootstrap.com/)
- [GLightbox](https://biati-digital.github.io/glightbox/) ? para lightbox de imagens
- [jQuery](https://jquery.com/) ? para valida��es e intera��es no formul�rio

---

## ? Resultado Final

Um sistema funcional, moderno, leve e f�cil de manter para gerenciar clientes com:

- ? Responsividade
- ? Upload e exibi��o de fotos
- ? Valida��es client-side e server-side
- ? C�digo limpo e organizado

---

## ????? Desenvolvido com ?? e ? por **Gilbert Sampaio**
