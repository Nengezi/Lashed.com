# Lashed.com
Senior Capstone Project.

**Basic functionality/Description**
Product: Lashed.com, a false lash e-commerce store. 
Overview: Lashed.com is a simple eCommerce store that sells magnetic lashes. Users are able to view lashes and add them to the cart. There is also an about page for the company as well as individual product pages for all products. 

**Instructions**
* For the site to run, this software is required:
* MAMP to host the server
* Node.js
* Sass
* Ruby (for Sass to run)
* After hosting the database (SQL file included), the site should work through your server. After that, the site is user-intuitive to use. 

**Tools Used**
* PHP - Used to create main site pages.
* MySQL (PHPMyAdmin) - Used to create a database that is accessed by the site as well as host a server.
* JavaScript - Used to initiate and edit owl carousel styling and isotope styling.
* Node.js - Helped to execute javascript outside browser. Needed to use Sass
* Bootstrap - Used bootstrap templates for site layout and parts like the navigation bar.
* Sass - CSS preprocessor. That allowed me to use variables such as primary color, secondary color, etc. rather than type out each color seen in style.css
* Ruby - Needed to use Sass
* Owl Carousel - Used to create the top picture banner sliders that users can click through. Also used in the Top Sellers section on the homepage as well as the More Styles section of the cart.
* Isotope - Used as a plugin that would assist me in the layout of the home webpage to filter the product layout in the Our Magnetic Lashes section on the home page. Used also in the layout of the footer. 
* Font Awesome - For fonts.

**Pages and their Functionality/Features**
 Home Page
* The home page is made up of an index.php file that calls to the PHP files that make it up such as:
* header.php - links bootstrap template, Owl Carousel, Font Awesome, CSS file, and function.php.
* functions.php - requires the page to have database functionality for the use of updating the cart on the navbar. 
 - HTML - Top div and the navigation bar. 
* banner-area.php - Uses Owl Carousel to create a slider of the top three images.
* top-sale.php - Calls the database to fill Popular section with product information. Also used for add to cart function or go to the product page if the user clicks a product from it. Call to owl carousel template.
 - HTML - Hold slider. 
* special-price.php - Calls the database to fill the Our Lashes section with product information. As well as to add it to the cart or go to the product page if the user clicks a product from it.  Add star ratings and button functionality.
 - HTML - Holds Our Lashes section as well as styles product cards in a grid. 
* footer.php - Styling of the footer.

Product Page(s)
* The product pages change according to which product you choose. The page product.php calls to header.php, products.php, and footer.php
* products.php - Gets product information from the database. Gives add-to-cart button functionality.
 - HTML - page setup and details.

About Us Page
* Company Information page about-us.php calls header.php and footer.php
 - HTML is Used to house and input the company information itself.

Cart 
* The cart page is the cart.php page that calls to header.php, cart-template.php, cart_notFound.php, and footer.php
* cart-template.php - Calls database to get product data as well as the add and delete functionality. Subtotal update functionality as well.
* cart_notFound.php - If the cart is not full go to the empty cart page page 

**Features** 

Home Page - Main page
* Users are able to access the home page through the site name link.
* Users are able to access the cart through the cart icon.
* When users add items to the cart the amount of products in the cart updates on the nav bar.
* Users are able to click through the top product picture banner. 
* Users are able to click through the Popular section. 
* Users can add lashes from the _Popular_ section and _Our Gorgeous Magnetic Lashes_ Section. 
* At the footer, users can input their emails (The site reloads when they submit, I did not add any other functionality yet)
* Users can access the About us Page through the footer.
* The _Popular_ section and _Our Gorgeous Magnetic Lashes_ section show the same lashes that is why when one is in the cart it will show up in both sections as in the cart.

Product Pages(s) 
* When a product is clicked on the user is taken to the specific product page.
* Users can view product details.  

About Us Page 
* Users can click the about us link in the header to be taken to the page.
* Users can view company information.

Cart  
* Users can view the cart through the cart icon on the navbar
* Users can delete items in the cart
* The price of items is updated in the subtotal section.

