<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center"> Restaurante </h1>

Esse projeto de um restaurante fictício foi criado por mim enquanto ministrava o [**Curso de Aprimoramento de Desenvolvimento em PHP com Laravel e VueJs**](https://www.youtube.com/playlist?list=PLX6YAs9mP4e0UkurTVrsmrVBxgpViNzhy), que teve como objetivo o compartilhamento de conhecimentos e experiências para apresentar e ensinar novas tecnologias para os alunos do IFPB - Campus Monteiro. Sendo um projeto de fins totalmente educativos.

O projeto foi desenvolvido em partes, sendo explicado e construído em um módulo de 9 aulas, sendo elas:

| Aula | Nome | Link |
| ---- | ---- | ---- |
| Aula 1 | Apresentando o Projeto Final. | [Assistir](https://www.youtube.com/watch?v=W2oO1ALawYs&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=1&t=2s&pp=gAQBiAQB) |
| Aula 2 | Criando Projeto com Laravel e VueJs. | [Assistir](https://www.youtube.com/watch?v=PTTeHY-hHcg&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=2&pp=gAQBiAQB) |
| Aula 3 | Personalizando a Página Inicial. | [Assistir](https://www.youtube.com/watch?v=rsI4MSFKcbI&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=3&t=2s&pp=gAQBiAQB) |
| Aula 4 | Criando a rota e a página do cardápio. | [Assistir](https://www.youtube.com/watch?v=TKpp8Geq5So&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=4&pp=gAQBiAQB) |
| Aula 5 | Criando o cardápio e o carrinho. | [Assistir](https://www.youtube.com/watch?v=XwPwE56bGDQ&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=5&pp=gAQBiAQB) |
| Aula 6 | Criando o Back-End do projeto. | [Assistir](https://www.youtube.com/watch?v=und9sHWZZVA&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=6&pp=gAQBiAQB) |
| Aula 7 | Enviando dados para a view. | [Assistir](https://www.youtube.com/watch?v=BhCEBrXq6gU&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=7&pp=gAQBiAQB) |
| Aula 8 | Adicionando tipos de Cardápio e Pratos na Tabela. | [Assistir](https://www.youtube.com/watch?v=l8LGtkv-tEY&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=8&pp=gAQBiAQB) |
| Aula 9 | Adicionando Pratos no Carrinho. | [Assistir](https://www.youtube.com/watch?v=hXEIufy4RoU&list=PLX6YAs9mP4e0zkVC3n2b7FOZgogxJW7Zt&index=9&t=663s&pp=gAQBiAQB) |

O projeto conta com:

- Um sistema de Cadastro e Login.
- Uma página de recepção que apresenta informações sobre o restaurante.
- Um cardápios com pratos separados por tipo, sendo eles:
  - Pizzas
  - Almoço
  - Café da Manhã
- Um Sistema de Carrinho.
- Um Sistema de Somar os itens do carrinho.

Para o desenvolvimento desse projeto utilizamos as ferramentas do Laravel para gerenciamento do banco de dados, como as **Factories**, as **Migrations** e os **Seeders**, além da criação de **Componentes** no VueJs para a construção do Front-End.

<h1 align="center"> Instalação </h1>


1. Baixe o projeto em uma pasta de sua preferencia.
2. Abra essa pasta em um prompt de comando (Git Bash por exemplo).
3. Faça a instalação utilizando os seguintes comandos:

    - Para instalar as dependencias via composer.
    ```
        composer install
    ```
    
    - Para instalar outras dependencias via npm (Node Package Manager).
    ```
        npm install
    ```
    
    - Para criar uma chave única para o projeto.
    ```
        php artisan key:generate
    ```
4. Após isso altere o nome do arquivo na pasta raíz (laravel-restaurante) chamado "**.env.example**" para "**.env**".
5. Agora configure seu banco de dados de acordo com as informações desse arquivo (crie um banco chamada laravel-restaurante) ou altere ele para ser compatível com o seu banco.
6. Com o banco configurado agora você deve adicionar os dados preexistentes no sistema utilizando o seguinte comando:

    - Esse comando criará as tabelas no banco e preencherá com os dados ficticios preexistentes no projeto.
    
    ```
        php artisan migrate:fresh --seed
    ```
    
<h1 align="center"> Executando o projeto </h1>


1. Na pasta raíz do projeto execute o seguinte comando:

    - Esse comando fará a compilação do projeto.
    
    ```
        npm run dev
    ```
2. Depois execute o seguinte comando:

    - Esse comando iniciará um servidor logal que fornecerá o acesso ao projeto pelo navegador.
    
    ```
        php artisan serve
    ```

3. Agora abra o navegador e acesse o endereço que o comando anterior fornecer.
4. Pronto.
