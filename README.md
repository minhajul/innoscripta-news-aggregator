## Innoscripta News Aggregator

Innoscripta news aggregator app fetch articles from various sources and provide api to manage and displays them in a clean, easy-to-read format

- Authentication
    - Registration
    - Login
    - Send Password Reset Link
    - Reset Password
    - Logout
- Article
    - Get articles with search and filtering option by date, category, author, source
    - Get single article
- Preference
    - Get user preferences
    - Create preference
    - Edit preference
    - Get single preference
    - Update preference
    - Delete preference
- User
    - Get User details
    - Get preferred articles of user

Fetching data from different sources like The Guardian, New York Times, and BBC.

### Prerequisites
- Laravel 11
- Docker
- MySQL Database

### Installation Process
1. Clone or Download this project
2. Go to the project root directory and execute `composer install` to install all php dependencies of the project 
3. Then run  `./vendor/bin/sail up` to boot up docker images and server
4. Create a file named as .env and copy the content of .env.example to newly created .env file
5. Then execute `./vendor/bin/sail php artisan key:generate` on your terminal to generate environment key
6. Execute `./vendor/bin/sail php artisan migrate --seed` on your terminal to migrate the database and seed dummy data
7. Execute this command `./vendor/bin/sail php artisan scribe:generate` to generate the docs and go to `http://localhost/docs` to see it. It's running!
