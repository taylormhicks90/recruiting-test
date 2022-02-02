# Recruiting Test

## Description
This app provides two basic test to be used while recruiting potential hires for a sales position. The first is a Cognitive Ability Test that is 
based upon the Wonderlic Test. The second is a personality test that 

## Installation & setup
Clone the repository and point the webroot of your server to /public
Create a database for the app
copy /env to ./.env and modify as appropriate
run composer install
run php spark -migrate
run php spark db:seed CATestSeeder

