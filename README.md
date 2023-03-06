# Leave Management System


## Introduction

A leave management system is a process within an organization that determines how leave is requested by employees and approved by managers, as well as how it is tracked for payroll, balance, and other purposes.
This leave management system has some basic features such as leave requests, leave tracking, approval and etc.

## Technologies
- Laravel 10
- MySQL


## Configuration and Setup

This management system is written in Laravel framework. The database is written as a migration file where we can trigger that migration script to deploy the database automatically.

## Database Migrations

#### Step 1:
- Create an empty database in the MySQL with the name of **dsa_leave_management**
- Import dsa_leave_management.sql in phpMyAdmin

#### Step 2:

- Navigate to the project folder using CMD / Terminal / cPanel SSH.


- Execute the bellow command to migrate the database.

  ```
    php artisan migrate
  ```


## Credentials
- Username:- **admin**
- Password:- **admin123**
