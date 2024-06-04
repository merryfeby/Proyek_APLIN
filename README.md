# MovieMate
  MovieMate is a movie ticket booking application developed using the Laravel framework. The application is designed for a seamless cinema experience, leveraging Tailwind CSS and Bootstrap for responsive and elegant design, and integrating the Midtrans API for secure and efficient payment processing.
  
# Technologies Used
- Backend: Laravel (PHP)
- Database: MySQL
- Styling: Tailwind CSS, Bootstrap
- Payment Gateway: Midtrans API
  
# Installation
1. Clone the Repository
```
git clone https://github.com/yourusername/moviemate.git
cd moviemate
```

2. Set Up Environment Variables
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_moviemate
DB_USERNAME=root
DB_PASSWORD=password

MIDTRANS_SERVER_KEY=your_midtrans_server_key
MIDTRANS_CLIENT_KEY=your_midtrans_client_key
```

3.  Install Dependencies
```
composer install
```

4. Set Up Database & Key
```
php artisan migrate --seed
php artisan key:generate
```

5. Run
```
php artisan serve
```
