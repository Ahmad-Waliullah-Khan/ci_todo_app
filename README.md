# Simple Todo App using CodeIgniter 4

## Setup

##### Creat a database with the following name:

`ci_todo_list`

##### create a table in the local database with the following name:

`todo`

##### Import the SQL dump from the root folder

or

##### Create 3 columns in the db as following:

`id : integer, primary key, auto increment`

`title : varchar`

`body : varchar`

`is_complete : boolean`

##### Update the `Config/Database.php` with your local database credentials

##### Rename the `env` file to `.env` and update the db credentials

##### Run the server using the following command:

`php spark serve`

##### Access the App using the following URL :

`http://localhost:8080`