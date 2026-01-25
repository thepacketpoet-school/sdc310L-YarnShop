# Test Documentation
## Haley's Hobby Yarn & Thread
**Author:** Haley Archer  
**Course:** SDC310L - Server-Side Scripting Lab  
**Date:** January 25, 2026  
**Application Version:** Phase #5 (Week 5 Final)

---

## Executive Summary
This document describes the comprehensive testing performed on the Haley's Hobby Yarn & Thread e-commerce application. Testing covered all functional requirements including product display, shopping cart operations, database connectivity, session management, and MVC architecture implementation. All critical tests passed successfully, with minor recommendations for future enhancements noted.

---

## Test Environment
- **Operating System:** macOS (M3 MacBook Air)
- **Web Server:** Apache 2.4 (via XAMPP 7.4.10)
- **Database:** MySQL 5.7
- **PHP Version:** 7.4
- **Browser Tested:** Chrome 131, Safari 18
- **Test Date:** January 25, 2026

---

## Test Cases

### 1. Product Catalog Display
**Test ID:** TC-001  
**Description:** Verify that all products from the database are displayed correctly on the catalog page  
**Prerequisites:** Database contains 6 yarn products  

**Test Steps:**
1. Navigate to `http://localhost/Archer_YarnShop/index.php`
2. Verify page loads without errors
3. Count number of products displayed
4. Verify each product card contains:
   - Product image
   - Product name
   - Description
   - Price
   - Stock quantity
   - Quantity input field
   - "Add to Cart" button

**Expected Results:**
- 6 products displayed in grid layout
- All product information displays correctly
- Images load properly (SVG placeholders)
- Prices formatted as currency ($X.XX)
- Stock quantities are visible

**Actual Results:** ✅ PASSED
- All 6 products displayed correctly
- Product grid responsive and properly styled
- All fields populated with database values
- Images displayed (custom SVG for each product)
- Stock quantities showing: Merino (50), Cotton (75), Alpaca (30), Acrylic (100), Bamboo (40), Mohair (25)

**Screenshots:** catalog_page.png

---

### 2. Add to Cart Functionality
**Test ID:** TC-002  
**Description:** Verify users can add products to shopping cart  
**Prerequisites:** Catalog page loaded with products displayed  

**Test Steps:**
1. Select product: Soft Merino Wool - Dusty Rose
2. Set quantity to 3
3. Click "Add to Cart" button
4. Observe cart badge in navigation
5. Navigate to cart page

**Expected Results:**
- Cart badge shows (1) - one product type added
- Redirects to cart page
- Cart displays selected product with quantity 3
- Line total calculated correctly (3 × $12.99 = $38.97)

**Actual Results:** ✅ PASSED
- Cart badge updated to show (1)
- Successfully redirected to cart.php
- Product displayed with correct quantity
- Line total: $38.97 (calculated correctly)
- Session persisted cart data

**Screenshots:** add_to_cart.png

---

### 3. Multiple Products in Cart
**Test ID:** TC-003  
**Description:** Verify multiple different products can be added to cart  
**Prerequisites:** One product already in cart  

**Test Steps:**
1. Return to catalog (click "Continue Shopping")
2. Add Cotton Blend - Ocean Blue (quantity: 1)
3. Add Chunky Alpaca - Cream (quantity: 4)
4. Add Acrylic Worsted - Rainbow Multi (quantity: 1)
5. Navigate to cart page

**Expected Results:**
- Cart badge shows (4) - four product types
- All four products listed in cart table
- Each product shows correct quantity and line total
- Subtotal = sum of all line totals

**Actual Results:** ✅ PASSED
- Cart badge: (4)
- All products displayed:
  - Merino Wool: 3 × $12.99 = $38.97
  - Cotton Blend: 1 × $8.99 = $8.99
  - Alpaca: 4 × $18.99 = $75.96
  - Acrylic: 1 × $5.99 = $5.99
- Subtotal: $129.91 (verified manually)

**Screenshots:** multiple_products_cart.png

---

### 4. Update Cart Quantities
**Test ID:** TC-004  
**Description:** Verify users can update quantities of items in cart  
**Prerequisites:** Multiple products in cart  

**Test Steps:**
1. On cart page, change Merino Wool quantity from 3 to 5
2. Change Alpaca quantity from 4 to 2
3. Click "Update Cart" button
4. Verify changes reflected in cart

**Expected Results:**
- Merino line total updates: 5 × $12.99 = $64.95
- Alpaca line total updates: 2 × $18.99 = $37.98
- Subtotal recalculates automatically
- Tax recalculates based on new subtotal
- Total updates

**Actual Results:** ✅ PASSED
- Merino Wool quantity updated to 5, line total: $64.95
- Alpaca quantity updated to 2, line total: $37.98
- New subtotal: $117.91
- Tax (8.25%): $9.73
- Total: $127.64
- All calculations verified correct

**Screenshots:** update_cart.png

---

### 5. Remove Item from Cart
**Test ID:** TC-005  
**Description:** Verify users can remove items from cart  
**Prerequisites:** Cart contains multiple products  

**Test Steps:**
1. On cart page, click "Remove" link for Acrylic Worsted
2. Verify product removed from cart
3. Verify cart badge updates
4. Verify totals recalculate

**Expected Results:**
- Acrylic product removed from table
- Cart badge decrements to (3)
- Subtotal, tax, and total recalculate
- No error messages displayed

**Actual Results:** ✅ PASSED
- Acrylic product successfully removed
- Cart badge: (3)
- Recalculated totals:
  - Subtotal: $111.92
  - Tax: $9.23
  - Total: $121.15
- Page reloaded cleanly

**Screenshots:** remove_from_cart.png

---

### 6. Tax Calculation Accuracy
**Test ID:** TC-006  
**Description:** Verify tax calculation is correct at 8.25%  
**Prerequisites:** Cart contains items with known subtotal  

**Test Steps:**
1. Use cart with subtotal of $111.92
2. Calculate expected tax: $111.92 × 0.0825 = $9.2334
3. Verify displayed tax rounds to $9.23
4. Verify total = subtotal + tax

**Expected Results:**
- Tax calculated accurately
- Tax rounded to 2 decimal places
- Total = $111.92 + $9.23 = $121.15

**Actual Results:** ✅ PASSED
- Tax calculation: $9.23 (correctly rounded)
- Total calculation: $121.15 (correct)
- Formula verified in cart_controller.php: `$tax = $subtotal * 0.0825`

**Notes:** Tax rate is hardcoded as Texas sales tax (8.25%)

---

### 7. Empty Cart Handling
**Test ID:** TC-007  
**Description:** Verify application handles empty cart gracefully  
**Prerequisites:** Cart with items  

**Test Steps:**
1. Remove all items from cart individually
2. Navigate to cart page
3. Verify empty cart message displays
4. Verify "Proceed to Checkout" button is disabled

**Expected Results:**
- Empty cart message: "Your cart is empty"
- Link to continue shopping displayed
- No cart table shown
- Order summary shows $0.00 for all fields
- Checkout button disabled

**Actual Results:** ✅ PASSED
- Empty cart message displayed correctly
- "Continue shopping" link present
- Cart summary shows:
  - Subtotal: $0.00
  - Tax: $0.00
  - Total: $0.00
- Checkout button appears disabled

**Screenshots:** empty_cart.png

---

### 8. Session Persistence
**Test ID:** TC-008  
**Description:** Verify cart data persists across page navigation  
**Prerequisites:** Cart contains items  

**Test Steps:**
1. Add 2 products to cart
2. Navigate to catalog page
3. Navigate back to cart page
4. Refresh cart page
5. Close browser and reopen (within session timeout)

**Expected Results:**
- Cart contents remain after navigating away
- Cart contents remain after page refresh
- Cart badge accurate on all pages

**Actual Results:** ✅ PASSED
- Cart data persisted through navigation
- Cart data persisted through page refresh
- Cart badge (2) displayed correctly on catalog page
- Session timeout: Cart cleared after browser close (expected behavior)

**Notes:** PHP session_start() called on both index.php and cart.php

---

### 9. Stock Quantity Validation
**Test ID:** TC-009  
**Description:** Verify users cannot add more items than available stock  
**Prerequisites:** Product with known stock quantity  

**Test Steps:**
1. Identify Mohair Lace yarn (stock: 25)
2. Try to set quantity to 30 in input field
3. Observe max attribute on input field

**Expected Results:**
- Input field max attribute set to stock quantity
- Browser prevents entering quantity > stock
- If exceeded, form validation error or quantity capped at max

**Actual Results:** ✅ PASSED
- Input field has `max="25"` attribute
- Browser prevents typing values > 25
- HTML5 validation enforces stock limit
- Verified in index.php: `max="<?php echo $product['quantity_in_stock']; ?>"`

**Recommendation:** Add server-side validation in cart_controller.php as backup

---

### 10. Database Connectivity
**Test ID:** TC-010  
**Description:** Verify application properly connects to database and handles errors  
**Prerequisites:** MySQL service running  

**Test Steps:**
1. Verify database connection in model/database.php
2. Stop MySQL service
3. Attempt to load catalog page
4. Restart MySQL and reload

**Expected Results:**
- With MySQL running: Page loads successfully
- With MySQL stopped: Error message displays
- After restart: Page loads normally

**Actual Results:** ✅ PASSED
- Normal operation: Connection successful via PDO
- MySQL stopped: Error message displayed ("Database connection failed")
- MySQL restarted: Full functionality restored
- Error handling prevents exposed database credentials

**Code Review:** PDO connection in try-catch block with proper error handling

---

### 11. MVC Architecture Verification
**Test ID:** TC-011  
**Description:** Verify code properly organized into MVC layers  
**Prerequisites:** Access to source code  

**Test Steps:**
1. Review folder structure for model/, view/, controller/ directories
2. Verify model layer contains only database operations
3. Verify view layer contains only presentation code
4. Verify controller layer contains business logic

**Expected Results:**
- Clear separation of concerns
- Models: database.php, products_db.php, cart_db.php
- Controllers: catalog_controller.php, cart_controller.php
- Views: index.php, cart.php (with minimal PHP logic)
- No database queries in views
- No HTML in models

**Actual Results:** ✅ PASSED
- Proper MVC structure implemented
- Model layer: All SQL queries isolated
- Controller layer: Business logic for cart operations
- View layer: Presentation only, calls controller functions
- CSS separated into style.css
- No mixing of concerns observed

**Code Quality:** Clean separation allows easy maintenance and testing

---

### 12. Input Sanitization and Security
**Test ID:** TC-012  
**Description:** Verify user input is properly sanitized to prevent SQL injection  
**Prerequisites:** Access to source code and database  

**Test Steps:**
1. Review cart_controller.php for input handling
2. Attempt to add SQL injection in quantity field
3. Review prepared statements in models

**Expected Results:**
- All database queries use prepared statements
- User input sanitized before processing
- No direct SQL query concatenation
- htmlspecialchars() used on output

**Actual Results:** ✅ PASSED
- All queries use PDO prepared statements with parameter binding
- Output escaped with htmlspecialchars() in views
- POST data type-cast to integers where appropriate
- No SQL injection vulnerabilities found

**Security Notes:** Good practices followed throughout

---

### 13. Cross-Browser Compatibility
**Test ID:** TC-013  
**Description:** Verify application works across different browsers  
**Prerequisites:** Access to multiple browsers  

**Test Steps:**
1. Test in Chrome
2. Test in Safari
3. Verify layout, functionality, and styling

**Expected Results:**
- Consistent appearance across browsers
- All functionality works in both browsers
- No JavaScript errors (N/A - no JS currently)
- CSS renders correctly

**Actual Results:** ✅ PASSED
- Chrome: All features working, styling correct
- Safari: All features working, styling correct
- Minor font rendering differences (expected)
- Gradient backgrounds display properly in both
- Form validation works in both browsers

---

### 14. Responsive Design
**Test ID:** TC-014  
**Description:** Verify application is usable on different screen sizes  
**Prerequisites:** Browser developer tools  

**Test Steps:**
1. Open Chrome DevTools
2. Test at 1920×1080 (desktop)
3. Test at 768×1024 (tablet)
4. Test at 375×667 (mobile)

**Expected Results:**
- Product grid adjusts to screen size
- Cart table remains readable
- Buttons accessible on mobile
- No horizontal scrolling required

**Actual Results:** ⚠️ PARTIAL PASS
- Desktop (1920×1080): Excellent layout
- Tablet (768×1024): Good, grid adjusts to 2 columns
- Mobile (375×667): Functional but cart table requires horizontal scroll
  
**Recommendations:**
- Add media query to stack cart table on mobile
- Consider card-based layout for mobile cart view
- Increase button size for mobile touch targets

---

### 15. Performance and Load Time
**Test ID:** TC-015  
**Description:** Verify application loads efficiently  
**Prerequisites:** Browser developer tools  

**Test Steps:**
1. Clear browser cache
2. Load catalog page
3. Measure page load time
4. Check number of database queries

**Expected Results:**
- Page loads in < 2 seconds on localhost
- Minimal database queries (one SELECT for products)
- No N+1 query problems
- Images load efficiently

**Actual Results:** ✅ PASSED
- Catalog page load time: ~350ms (localhost)
- Database queries: 1 SELECT query for all products
- SVG images load instantly (inline/embedded)
- No performance bottlenecks identified

**Notes:** Production deployment would benefit from:
- Database connection pooling
- Query result caching
- CDN for assets

---

## Test Summary

### Test Results Overview
| Test Category | Total Tests | Passed | Failed | Pass Rate |
|--------------|-------------|--------|--------|-----------|
| Functional | 12 | 12 | 0 | 100% |
| Security | 1 | 1 | 0 | 100% |
| Performance | 1 | 1 | 0 | 100% |
| UI/UX | 1 | 0 | 1 | 0% |
| **TOTAL** | **15** | **14** | **1** | **93%** |

### Critical Issues
**None identified.** All core functionality working as expected.

### Non-Critical Issues
1. **Mobile Responsiveness (TC-014):** Cart table requires horizontal scrolling on mobile devices
   - **Severity:** Low
   - **Recommendation:** Implement mobile-specific cart layout
   - **Workaround:** Users can scroll horizontally

### Recommendations for Future Development
1. Add server-side stock validation as backup to HTML5 validation
2. Implement mobile-responsive cart table layout
3. Add checkout functionality (payment processing)
4. Implement user authentication and order history
5. Add product search and filtering
6. Consider implementing AJAX for cart updates (no page reload)
7. Add input validation feedback messages
8. Implement database connection pooling for scalability
9. Add automated testing framework (PHPUnit)
10. Implement logging for debugging production issues

### Testing Conclusion
The Haley's Hobby Yarn & Thread application successfully passed 93% of tests with all critical functionality working correctly. The application demonstrates solid understanding of PHP, MySQL, MVC architecture, and session management. The one non-critical failure (mobile responsiveness) is documented and can be addressed in future iterations. The application is ready for submission and demonstrates proficiency in server-side web development.

---

## Appendix A: Test Data

### Products Used in Testing
| ID | Name | Price | Stock |
|----|------|-------|-------|
| 1 | Soft Merino Wool - Dusty Rose | $12.99 | 50 |
| 2 | Cotton Blend - Ocean Blue | $8.99 | 75 |
| 3 | Chunky Alpaca - Cream | $18.99 | 30 |
| 4 | Acrylic Worsted - Rainbow Multi | $5.99 | 100 |
| 5 | Bamboo Silk - Sage Green | $14.99 | 40 |
| 6 | Mohair Lace - Blush Pink | $16.99 | 25 |

### Sample Tax Calculations
| Subtotal | Tax (8.25%) | Total |
|----------|-------------|-------|
| $100.00 | $8.25 | $108.25 |
| $111.92 | $9.23 | $121.15 |
| $129.91 | $10.72 | $140.63 |

---

**Document Version:** 1.0  
**Last Updated:** January 25, 2026  
**Approved By:** Haley Archer
