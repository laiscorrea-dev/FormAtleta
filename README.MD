# Cadastro de Atletas

Projeto de um formulario web para cadastro de atletas de atletismo. A página apresenta um formulário centralizado, recebe os dados do atleta e exibe uma mensagem de confirmacao após o envio.

## Funcionalidades atuais

- Cadastro de nome do atleta.
- Cadastro de email e senha.
- Validacao do registro com exatamente 5 numeros no navegador.
- Selecao do clube pertencente.
- Selecao do sexo.
- Tela de retorno com os dados enviados.
- Layout responsivo usando Bootstrap 5.
- Estilos personalizados em `style.css`.

## Estrutura do projeto

```text
.
|-- index.php       # Formulario de cadastro
|-- retorno.php     # Recebe os dados e mostra a confirmacao
|-- style.css       # Estilos personalizados
|-- logo.png        # Logo exibida nas paginas
`-- README.md       # Documentacao do projeto
```

## Como executar

1. Instale o XAMPP.
2. Copie este projeto para a pasta `htdocs`.
3. Inicie o Apache no painel do XAMPP.
4. Acesse no navegador:

   `http://localhost/php/index.php`

## Como funciona

O usuario preenche o formulario em `index.php`. Os dados sao enviados pelo metodo `POST` para `retorno.php`, que exibe uma mensagem de sucesso e os valores recebidos.

Atualmente, os dados sao apenas exibidos na tela. Eles ainda nao sao gravados em um banco de dados.

## Sugestoes de melhoria

### Prioridade alta

- Validar todos os dados novamente no PHP, pois a validacao do navegador pode ser ignorada.
- Usar `htmlspecialchars()` ao exibir valores recebidos, evitando problemas de XSS.
- Nao exibir nem armazenar senhas em texto puro. Para autenticao, usar `password_hash()` e `password_verify()`.
- Verificar se os campos existem antes de acessa-los em `$_POST`.
- Trocar `type="numeric"` por `type="text"` ou `type="number"`, pois `numeric` nao e um tipo HTML valido.

### Proximos passos

- Criar um banco MySQL para armazenar os atletas.
- Usar PDO com consultas preparadas.
- Criar uma pagina para listar, editar e excluir cadastros.
- Adicionar mensagens de erro para campos invalidos.
- Melhorar a acessibilidade associando corretamente cada `label` ao seu campo.
- Adicionar um arquivo de configuracao para organizar as credenciais do banco.
- Separar o processamento PHP da apresentacao HTML.
- Adicionar protecao contra CSRF quando o cadastro estiver conectado a um banco.

## Tecnologias

- PHP
- HTML5
- CSS3
- Bootstrap 5
- MySQL, como sugestao para a proxima versao
