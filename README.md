## Nom Nom Admin

<p align="center"><img src="./public/assets/images/logo/logo.png" width="400" alt="Nom Nom Logo"></p>

## About Nom Nom Admin

<p>Nom Nom Admin is a content Management System for Nom Nom Web Application. Here Admin do their task for managing, controlling and Monitoring backend system.</p>

## Cloning Project

Here tutorial for cloning this project :

-   Copy <b>.env.example</b> file to <b>.env</b> on the root example.You can type copy <b>.env.example .env</b> if using command prompt Windows or <b>cp .env.example .env </b> if using terminal, Ubuntu
-   Open your .env file and change the database name <b>(DB_DATABASE)</b> to whatever you have, username <b>(DB_USERNAME)</b> and password <b>(DB_PASSWORD)</b> field correspond to your configuration.
-   Run <b>php artisan key:generate</b>
-   Run <b>php artisan migrate</b>
-   Run <b>php artisan serve</b>
-   Further Explanation [here](https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github)

## Contributing

For Contributing this project follow this instruction :

1.  Create new branch

    #Branch Type

    -   feature : Adding new feature, page and component.
    -   fix : Fixing bug and Error.
    -   style : Adding new Style in CSS or Tailwind CSS.

    #Branch Name

    [branch_type]\_[branch_name]

    Example :

    -   feature_login
    -   style_card
    -   fix_dropdown

    #Creating Branch

    ```
    -git branch branch_name
    (example : git branch feature_login)
    ```

    #Changing Branch

    ```
    -git checkout branch_name
    (example : git checkout feature_login)
    ```

    #Deleting Branch

    ```
    -git branch -d branch_name (example: git branch -d feature_login)
    ```

2.  Adding file from working directory to staging index

    ```
    git add .
    ```

3.  Check Status

    ```
    git status
    ```

4.  Commit File

    ```
    -git commit -m "name_type:commit_message"
    ```

    #Commit Message

    -   feature : Adding new feature, page and component.
    -   fix : Fixing bug and Error.
    -   style : Adding new Style in CSS or Tailwind CSS.
    -   Example :

    ```
    git commit -m "dzakiy_feature: Menambahkan halaman login"
    ```

5.  Push File to Branch Repository
    ```
    -git push -u origin branch_name
    ```
6.  Pull Request for Review and then merge to master repository.

## Contributor

-   [Caesto Marco Tampubolon](https://github.com/cstmrc3130)
-   [Donny Adithya](https://github.com/DonnyAdithya)
-   [Dzakiy Dzakwan](https://github.com/DzakiyDzakwan)
-   [Fatma Ananta Sari](https://github.com/fatmananta)
-   [Mutia Rahmah](https://github.com/HelloitsMutiaa)
-   [Talitha Syafiyah](https://github.com/talithasyafiyah)
