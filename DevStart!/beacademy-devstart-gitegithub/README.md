># Git e Github
>
>`Projeto criado para instruir os alunos do programa devstart, quanto a utilização do git e github. Utilizaremos este repositório para salvar dicas e comandos úteis do git e também da plataforma github.`
>
>
>## Configurações
>
>|Comandos | Descrições|
>|------------|----------|
>|**`git config --global user.name "nome"`** | *Configura o nome de usuário*
>|**`git config --global user.email "email"`** | *Configura e-mail do usuário*
>
>## Iniciando ou clonando repositório
>|Comandos | Descrições|
>------------|----------
>|**`git init`** | *Inicia um repositório vazio*
>|**`git clone "url do repositorio"`** | *Clona um repositorio existente*
>
>## Comandos básicos
>|Comandos | Descrições|
>------------|----------
>**`git add "NomeDoArquivo.extensao"`** | *Prepara o arquivo a ser comitado*
>**`git add .`** | *Prepara todos os arquivos para serem comitados*
>|**`git status`** | *mostra os arquivos que podem ser comitados no repositorio local*
>|**`git rm --cached "NomeDoArquivo.extensao"`** | *Remove o arquivo a ser comitado*
>|**`git commit -m "mensagem do commit"`** | *Adiciona um commit*
>|**`git log`** | *Mostra o histórico de commits*
>|**`git push`** | *Envia o commit para o servidor*
>|**`git reset`** | *Reseta as mudanças, com riscos de perder alterações*
>
>## Ramificação e mesclagem
>|Comandos | Descrições|
>|------------|----------|
>|**`git branch`** | *Lista todas as branch's*|
>|**`git branch "nome da branch"`** | *Cria uma branch*
>|**`git checkout "nome da branch"`** | *Acessa a branch*
>|**`git checkout -b "nome da branch"`** | *Cria e acessa a branch*
>|**`git branch -d "nome da branch"`** | *Deleta a branch*
>|**`git stash`** | *Guarda as edições atuais*
>|**`git stash list`** | *Lista as edições guardadas*
>|**`git stash --include-untracked`** | *Salva alterações sem commit*
>|**`git merge "nome da branch"`** | *Mescla duas Branch's, selecionar a branch para onde deseja fazer o merge antes*
>
>## Outros
>|Comandos | Descrições|
>------------|----------
>|**`git remote`** | *Mostra o repositório remoto selecionado*
>|**`git remote -v`** | *Mostra repositório de origem*
>|**`git remote set-url origin "new_url"`** | *Altera a origem do respositorio*
>**`git revert "4 primeiros dígitos do hash do commit"`** | *reverte as mudanças de um commit e gera um novo commit*
>
>## Autor
>
>[@Elivandro](https://www.github.com/Elivandro/)
>#