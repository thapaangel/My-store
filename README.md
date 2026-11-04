# My-store

A responsive e-commerce storefront built with **PHP**, **MySQL**, and **Bootstrap 5**. The homepage shows a product grid with a navigation bar, search box, and cart placeholders, and a sidebar whose **brands** and **categories** are loaded dynamically from a MySQL database.

> **Status:** Work in progress. The front-end layout and database connection are in place; product listing, filtering, cart, and user accounts are planned.

## Features

- Responsive layout using Bootstrap 5 (navbar, grid, cards)
- Product cards with "Add to cart" and "View More" buttons
- Sidebar menus for **Delivery Brands** and **Categories**, generated from the database with `mysqli`
- Shared database connection file in `includes/`
- Separate `admin/` area for store management
- Font Awesome icons

## Tech Stack

| Layer     | Technology                  |
|-----------|-----------------------------|
| Backend   | PHP (mysqli)                |
| Database  | MySQL / MariaDB             |
| Frontend  | HTML, CSS, Bootstrap 5.3    |
| Icons     | Font Awesome 4.7            |

## Project Structure

```
My-store/
├── admin/          # Admin area
├── images/         # Logo and product images
├── includes/
│   └── connect.php # Database connection
├── index.php       # Storefront homepage
├── style.css       # Custom styles
└── README.md
```

## Getting Started

### Prerequisites

- PHP 7.4 or newer
- MySQL or MariaDB
- A local server stack such as [XAMPP](https://www.apachefriends.org/), WAMP, or MAMP

### Installation

1. **Clone the repository** into your server's web root (for XAMPP, the `htdocs` folder):

   ```bash
   git clone https://github.com/thapaangel/My-store.git
   ```

2. **Create the database.** Open phpMyAdmin (or the MySQL CLI) and create a database, for example `mystore`.

3. **Create the tables** the homepage reads from:

   ```sql
   CREATE TABLE brands (
     brand_id INT AUTO_INCREMENT PRIMARY KEY,
     brand_title VARCHAR(100) NOT NULL
   );

   CREATE TABLE categories (
     category_id INT AUTO_INCREMENT PRIMARY KEY,
     category_title VARCHAR(100) NOT NULL
   );
   ```

4. **Add some sample data:**

   ```sql
   INSERT INTO brands (brand_title) VALUES ('Nike'), ('Adidas'), ('Cadbury');
   INSERT INTO categories (category_title) VALUES ('Fruits'), ('Clothing'), ('Jewellery');
   ```

5. **Configure the connection.** Open `includes/connect.php` and make sure it matches your setup. The page expects a `mysqli` connection stored in `$con`:

   ```php
   <?php
   $con = mysqli_connect('localhost', 'root', '', 'mystore');
   if (!$con) {
       die('Connection failed: ' . mysqli_connect_error());
   }
   ```

6. **Run the site.** Start Apache and MySQL, then visit:

   ```
   http://localhost/My-store/
   ```

## Roadmap

- [ ] Load products from the database instead of hard-coded cards
- [ ] Filter products by brand and category
- [ ] Product detail page
- [ ] User registration and login
- [ ] Working shopping cart and order total
- [ ] Search
- [ ] Admin dashboard for managing products, brands, and categories


## Author

**Aruna Thapa** — [GitHub](https://github.com/thapaangel)

