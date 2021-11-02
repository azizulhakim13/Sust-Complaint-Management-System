# 1. Clone the Repository from github
Clone this repository with the command below:
```
git clone https://github.com/CSE-446-2016/group_13.git 
```

# 2. cd into your project
We need to be inside that project file to enter all of the rest of the commands for the the project

# 3. Installing Requirements
To install the rquirements for the project do the following commands:
```
composer install
```
```
cp .env.example .env
```
```
php artisan key:generate
```
```
php artisan migrate
```
```
php artisan serve
```
now, serach the link in your browser: ` localhost:8000 `
then the site will be served in the local server

# Browse
Now you can browse the website and will be able to signup and login. Then finally you can complain anything in any category you want.
