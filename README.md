# Cool-Tech – Laravel Content Platform

## Overview

Cool-Tech is a Laravel-based web application designed to publish and organise technology-related opinion pieces and articles.

The platform allows users to browse the latest articles, explore content by category, and discover related articles through tags such as AI, Google, High-Performance Computing, and Singularity.

The application focuses on improving content organisation and discoverability through category-based navigation, article tagging, and search functionality, while supporting better Search Engine Optimisation (SEO).

## Features

### Article Management and Navigation
- **Home Page:** Displays the five latest articles, including their titles and introductory paragraphs.
- **Article View:** Displays an individual article's title, content, publication date, category, and associated tags.
- **Category View:** Lists articles belonging to a selected category.
- **Tag View:** Lists articles associated with a selected tag.
- **Search Functionality:** Allows users to search for articles by ID, category, or tag.

### Website Pages and Components
- **About Us:** Provides information about the website.
- **Legal Page:** Includes Terms of Use and Privacy Policy information.
- **Cookie Notice:** Displays a cookie notice across the website.
- **Reusable Footer:** Provides navigation links to the search and legal pages, alongside a dynamically generated copyright year.

### Database Design
The database is designed to support:
- Articles, each associated with exactly one category.
- Categories, used to organise articles.
- Tags, allowing articles to be associated with multiple relevant topics.
- A many-to-many relationship between articles and tags.
- Database indexing to support efficient article retrieval by creation date, category, and tags.

An Entity Relationship Diagram (ERD) is included to illustrate the database structure and relationships.

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** HTML, CSS, JavaScript, Blade
- **Database:** MySQL
- **Version Control:** Git and GitHub

## Project Structure

The application follows Laravel's MVC (Model-View-Controller) architecture:

- **Models:** Represent the application's database entities and relationships.
- **Views:** Blade templates responsible for rendering the user interface.
- **Controllers:** Handle incoming requests, application logic, and responses.
- **Routes:** Define the application's URL endpoints and connect them to the appropriate controllers.

## Installation and Setup

### Prerequisites
- PHP
- Composer
- MySQL
- Node.js and npm

### 1. Clone the repository

```bash
git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
```

### 2. Navigate into the project directory

```bash
cd YOUR-REPOSITORY
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Install frontend dependencies

```bash
npm install
```

### 5. Configure environment variables

Create your environment file:

```bash
cp .env.example .env
```

Update the database configuration in `.env` with your local MySQL credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Generate the application key

```bash
php artisan key:generate
```

### 7. Run database migrations and seeders

```bash
php artisan migrate --seed
```

### 8. Start the development server

```bash
php artisan serve
```

Visit the application at:

```text
http://127.0.0.1:8000
```

## Learning Objectives

This project demonstrates practical experience with:

- Developing web applications using Laravel and PHP.
- Designing relational databases and implementing entity relationships.
- Implementing one-to-many and many-to-many relationships.
- Building dynamic pages using Laravel Blade.
- Working with routes, controllers, and models.
- Implementing search and filtering functionality.
- Creating reusable interface components.
- Applying database indexing and considering query efficiency.
- Using Git and GitHub for version control.

## Project Status

Developed as part of a web development and software engineering exercise, with an emphasis on Laravel fundamentals, relational database design, backend functionality, and user-friendly web development.