
# Booking Room is a simple project for booking and rescheduling room


## 😄 User Role

Completed with 2 Users
- Admin (managed Users and room schedule)
- Ordinary User (books room)

## 🏁 Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them.

```
PHP >= 8.0.12
```

### Installing

A step by step series of examples that tell you how to get a development env running.

Say what the step will be

```
git clone

composer install

composer update

cp .env.example .env

php artisan key:generate

CREATE DATABASE

Modify .env file

php artisan migrate --seed

php artisan serve
```

## 🎈 Usage

Login with Role Admin
- Email/Username = admin@gmail.com / admin
- Password = 123456

Login with Role User (may you prefer to register)
- Email/Username = user@gmail.com / user
- Password = 123456

There's 8 types of booking status
- pending = the first status after request booking
- approved = when admin approving your request
- rejected = when admin rejecting your request and you refuse to reschedule
- used = when you used the room
- canceled = when you canceling the room you have been book
- done = when the room already used
- expired = the pending status not noticed by admin and it has been past the booking date
- rescheduled = when you accept to reschedule your booking

## ⛏️ Built With

- [MySQL](https://www.mysql.com/) - Database
- [Laravel](https://laravel.com/) - Server Framework
- [Bootstrap](https://getbootstrap.com/) - Web Framework
- [NodeJs](https://nodejs.org/en/) - Server Environment
- [SweetAlert](https://sweetalert2.github.io/) - Notification
- [Datatables](https://datatables.net/) - Paging Data
