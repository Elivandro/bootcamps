# Projeto empresarial: Ecommerce de vinhos

## Tecnologias usadas
- PHP 8.1
- Laravel 9
  - Eloquent ORM
  - Breeze (autenticação)
  - Blade (template engine)
- MySQL / MariaDB
- Bootstrap 5

## Passo a passo para subir o servidor
1. Fazer o clone do projeto:
```bash
git clone git@github.com:E-A-D-S/beacademy-devstart-rubi.git
```

2. Entrar na pasta do projeto:
```bash
cd /beacademy-devstart-rubi
```

3. Instalar as dependências do Composer:
```bash
composer install
```

4. Mudar o arquivo `.env`:
```bash
# Windows
cp .env.example .env

# Linux / Mac
cp .env.example .env
```

5.Editar o arquivo `.env` com dados do seu banco de dados local:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

6. Gerar a chave do Laravel:
```bash
php artisan key:generate
```

7. Fazer a migração do banco de dados:
```bash
php artisan migrate
```

8. Fazer o "semeamento" do banco de dados:
```bash
php artisan db:seed
```

9. Iniciar o servidor para usar a aplicação:
```bash
php artisan serve
```

## Membros da Squad
<table>
  <tr>
    <td align="center">
      <a href="https://github.com/Bryan-R-Carvalho">
        <img src="https://github.com/Bryan-R-Carvalho.png" width="100px;" alt="Bryan Carvalho"/><br>
        <sub>
          <b>Bryan Carvalho</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/E-A-D-S">
        <img src="https://github.com/E-A-D-S.png" width="100px;" alt="Eduardo Araújo"/><br>
        <sub>
          <b>Eduardo Araújo</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/Elivandro">
        <img src="https://github.com/Elivandro.png" width="100px;" alt="Elivandro"/><br>
        <sub>
          <b>Elivandro</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/bielmariano">
        <img src="https://github.com/bielmariano.png" width="100px;" alt="Gabriel Mariano"/><br>
        <sub>
          <b>Gabriel Mariano</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/LuanyBoneli">
        <img src="https://github.com/LuanyBoneli.png" width="100px;" alt="Luany Boneli"/><br>
        <sub>
          <b>Luany Boneli</b>
        </sub>
      </a>
    </td>            
    <td align="center">
      <a href="https://github.com/MatheusSGomes">
        <img src="https://github.com/MatheusSGomes.png" width="100px;" alt="Matheus Gomes"/><br>
        <sub>
          <b>Matheus Gomes</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/renatadeodorio">
        <img src="https://github.com/renatadeodorio.png" width="100px;" alt="Renata Deodório"/><br>
        <sub>
          <b>Renata Deodório</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/tharsila">
        <img src="https://github.com/tharsila.png" width="100px;" alt="Tharsila Borges"/><br>
        <sub>
          <b>Tharsila Borges</b>
        </sub>
      </a>
    </td>
  </tr>
</table>