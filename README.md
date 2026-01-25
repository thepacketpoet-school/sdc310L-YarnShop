# Project Name: Haley's Hobby Yarn & Thread

## Project Description
Haley's Hobby Yarn & Thread is a full-stack e-commerce web application for selling yarn and crafting supplies online. The application demonstrates proficiency in PHP web development, MySQL database management, MVC architecture, and session-based shopping cart functionality. Users can browse products, add items to their cart, adjust quantities, and view order totals with tax calculations.

## Project Tasks
- **Week 1: Project Planning**
  - Created comprehensive project plan with weekly milestones
  - Defined scope, objectives, and deliverables
  - Established timeline for 5-week development cycle

- **Week 2: Database and Application Framework**
  - Designed MySQL database schema for products table
  - Created yarn_shop database with sample product data
  - Built project folder structure (css, images, includes)
  - Created catalog page (index.php) with static product display
  - Created cart page (cart.php) with placeholder functionality
  - Implemented purple/mauve color scheme with CSS styling
  - Initialized GitHub repository with Phase #2 tag

- **Week 3: Database Integration and Shopping Cart**
  - Implemented PDO database connection
  - Created dynamic product display from database
  - Implemented session-based shopping cart
  - Added cart operations (add, update, remove items)
  - Implemented tax calculation (8.25% Texas sales tax)
  - Added cart item count badge in navigation
  - Displayed stock quantities on product cards
  - Tagged Phase #3 release in GitHub

- **Week 4: MVC Architecture Refactoring**
  - Refactored application to Model-View-Controller pattern
  - Created model layer (database.php, products_db.php, cart_db.php)
  - Created controller layer (catalog_controller.php, cart_controller.php)
  - Separated view layer (index.php, cart.php, styles.css)
  - Improved code organization and maintainability
  - Tagged Phase #4 release in GitHub

- **Week 5: Testing and Finalization**
  - Performed comprehensive functional testing
  - Validated all CRUD operations
  - Tested cart functionality across browsers
  - Documented test cases and results
  - Created project retrospective
  - Finalized documentation and README

## Project Skills Learned
- PHP server-side programming and session management
- MySQL database design and PDO connectivity
- MVC (Model-View-Controller) architectural pattern
- HTML/CSS responsive web design
- Git version control and GitHub workflow
- Project planning and milestone tracking
- Software testing and documentation
- E-commerce shopping cart implementation
- Security best practices (input sanitization, prepared statements)

## Languages and Technologies Used
- **PHP**: Server-side logic, session management, and database connectivity
- **MySQL**: Relational database for storing product and inventory data
- **HTML/CSS**: Frontend structure and styling with responsive design
- **JavaScript**: (Future enhancement for dynamic cart updates)
- **Git/GitHub**: Version control and project collaboration

## Development Process Used
- **Iterative Development**: Weekly milestones with incremental feature additions
- **Agile Principles**: Continuous testing, regular commits, and adaptive planning
- **MVC Architecture**: Separation of concerns for maintainable, scalable code

## Database Schema
**products table:**
- product_id (INT, PRIMARY KEY, AUTO_INCREMENT)
- product_name (VARCHAR 100)
- description (TEXT)
- price (DECIMAL 10,2)
- quantity_in_stock (INT)
- image_url (VARCHAR 255)
- category (VARCHAR 50)
- created_at (TIMESTAMP)

## Installation and Setup
1. Install XAMPP (Apache, MySQL, PHP)
2. Clone repository to htdocs folder:
```bash
   git clone https://github.com/thepacketpoet-school/sdc310L-YarnShop.git Archer_YarnShop
```
3. Import database:
```bash
   mysql -u root < yarn_shop.sql
```
4. Start Apache and MySQL via XAMPP Control Panel
5. Navigate to `http://localhost/Archer_YarnShop/index.php`

## Dependencies
- PHP 7.4+ with PDO extension
- MySQL 5.7+ or MariaDB 10.3+
- Apache Web Server 2.4+
- XAMPP 7.4.10 (recommended for development)

## Features
- Product catalog with dynamic database-driven display
- Session-based shopping cart
- Add/remove/update cart items
- Inventory tracking with stock display
- Tax calculation (8.25%)
- Order summary with subtotal, tax, and total
- Responsive design with mobile-friendly layout
- MVC architecture for clean code separation

## Future Enhancements
- User authentication and login system
- Order history and user profiles
- Payment gateway integration
- Product search and filtering
- Admin panel for inventory management
- Email notifications for orders
- Product reviews and ratings

## Link to Project
[Haley's Hobby Yarn & Thread Repository](https://github.com/thepacketpoet-school/sdc310L-YarnShop)

## Author
Haley Archer - ECPI University SDC310L Course Project

## License
This project was created for educational purposes as part of the SDC310L Server-Side Scripting Lab course at ECPI University.
