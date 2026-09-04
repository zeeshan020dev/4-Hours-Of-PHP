# PHP 4-Hour Course

A structured beginner-friendly collection of PHP notes covering the fundamentals of PHP, forms, control flow, arrays, functions, sessions, security concepts, and MySQL database integration.

This repository is designed as a quick learning and revision resource for anyone getting started with PHP.

---

## Course Overview

This course covers:

- PHP syntax and fundamentals
- Variables and operators
- GET and POST requests
- Mathematical functions
- Conditional statements
- Logical operators
- Loops
- Arrays
- Associative arrays
- Form handling
- Functions
- String manipulation
- Input sanitization and validation
- File inclusion
- Cookies
- Sessions
- Server variables
- Password hashing
- MySQL connectivity
- Database creation
- Data insertion
- Data retrieval

---

# Table of Contents

1. Introduction to PHP
2. Variables
3. Operators
4. GET & POST
5. Math Functions
6. If Statements
7. Logical Operators
8. Switch Statements
9. For Loops
10. While Loops
11. isset()
12. Arrays
13. Associative Arrays
14. isset() and empty()
15. Radio Buttons
16. Checkboxes
17. Functions
18. String Functions
19. Sanitize & Validate
20. Include Function
21. Cookies
22. Sessions
23. Server Variables
24. Hashing
25. Connecting PHP with MySQL
26. Creating Tables with phpMyAdmin
27. Inserting Data
28. Retrieving Data

---

# 1. Introduction to PHP

Basic PHP syntax:

```php
<?php

// Body of code

?>
```

### Important Points

- `echo` is used to display a message on the screen.
- `<br>` can be used to add a line break.
- `//` is used for a single-line comment.
- `/* */` is used for a multiline comment.
- PHP files can contain:
  - HTML
  - CSS
  - JavaScript
  - PHP
- In supported editors, typing `!` and pressing `Tab` can generate HTML boilerplate code.

---

# 2. Variables in PHP

A variable is a reusable container that stores data.

Variables can hold:

- String
- Integer
- Float
- Boolean

### Boolean Values

When a Boolean value is displayed:

- `true` is displayed as `1`
- `false` displays nothing

Boolean values are commonly used inside:

- Conditional statements
- Loops

### Escape Sequence

Use the escape sequence `\` when you need to display a dollar sign inside a message involving variables.

---

# 3. Operators in PHP

## Arithmetic Operators

```text
+
-
*
/
**
%
```

## Increment and Decrement Operators

```text
++
--
```

## Operator Precedence

PHP evaluates operators in the following order:

```text
()
**
* / %
+ -
```

---

# 4. GET & POST

`$_GET` and `$_POST` are special variables used to collect data submitted through HTML forms.

Example:

```html
<form action="some_file.php" method="get">
```

---

## $_GET

With GET:

- Data is appended to the URL.
- It is not secure for sensitive information.
- There is a character limit.
- URLs can be bookmarked with their values.
- GET requests can be cached.
- GET is useful for search pages.

---

## $_POST

With POST:

- Data is packaged inside the body of the HTTP request.
- It is more secure than GET for sending data.
- There is no data limit mentioned in these notes.
- Requests cannot be bookmarked with submitted values.
- Requests are not cached.
- POST is better suited for submitting credentials.

---

# 5. Math-Related Functions

PHP provides several built-in mathematical functions.

| Function | Description |
| --- | --- |
| `abs($x)` | Returns the absolute value of `$x` |
| `round($x)` | Returns the rounded value |
| `floor($x)` | Rounds a value down |
| `ceil($x)` | Rounds a value up |
| `pow($x, $y)` | Returns `$x` raised to the power `$y` |
| `sqrt($x)` | Returns the square root |
| `max($x, $y, $z)` | Returns the maximum value |
| `min($x, $y, $z)` | Returns the minimum value |
| `pi()` | Returns the value of Pi |
| `rand()` | Returns a random value |
| `rand(min, max)` | Returns a random value between the given range |

---

# 6. If Statements

An `if` statement executes code when a specified condition is true.

If the condition is false, the associated code is not executed.

### Important Points

- The order of `if` and `else` conditions matters.
- Conditional statements can work with Boolean variables.

---

# 7. Logical Operators

Logical operators are used to combine conditional statements.

There are three main logical operators.

| Operator | Symbol | Description |
| --- | --- | --- |
| AND | `&&` | True when both conditions are true |
| OR | `\|\|` | True when at least one condition is true |
| NOT | `!` | Reverses the Boolean value |

### NOT Operator

```text
true  → false
false → true
```

---

# 8. Switch Statements

A `switch` statement can be used as an alternative to writing many `elseif` statements.

Benefits mentioned in the notes:

- Requires less code
- Can make multiple-condition logic easier to manage

---

# 9. For Loop

A `for` loop repeats a block of code a specified number of times.

It is useful when you already know approximately how many times the code should execute.

---

# 10. While Loop

A `while` loop also repeats code.

Its purpose is similar to a `for` loop, but its syntax and control structure are different.

The syntax is similar to loops commonly used in languages such as C++.

---

# 11. isset() Function

`isset()` checks whether a variable exists and is not `NULL`.

Example:

```php
isset($var)
```

It returns:

- `true` if `$var` has been declared and is not `NULL`
- `false` otherwise

---

## Multiple Variables

You can check several variables at once:

```php
isset($a, $b, $c)
```

The function returns `true` only if all variables:

- Exist
- Are not `NULL`

---

## Checking Array Elements

Example:

```php
isset($_POST["stop"])
```

This returns `true` only when:

- The `stop` key exists
- Its value is not `NULL`

---

## Important Note

`isset()` does not determine whether a value is empty or false-like.

Values such as:

```text
0
""
false
```

are still considered set because they are not `NULL`.

Think of `isset()` as a:

> Presence + non-null check

---

# 12. Arrays

An array is a variable that can hold more than one value at a time.

Arrays can be declared using:

```php
array()
```

---

## Common Array Functions

### array_push()

Adds one or more elements to the end of an array.

```php
array_push($array, $value);
```

---

### array_pop()

Removes the last element.

```php
array_pop($array);
```

---

### array_shift()

Removes the first element.

```php
array_shift($array);
```

---

### array_reverse()

Reverses the order of an array.

```php
array_reverse($array);
```

The returned array can be stored inside another variable and traversed using a `foreach` loop.

---

### count()

Returns the number of elements inside an array.

```php
count($array);
```

---

# 13. Associative Arrays

An associative array stores information using:

```text
key => value
```

Examples:

```text
country => capital
id      => username
item    => price
```

---

## Useful Associative Array Functions

### array_pop()

Removes the last element.

```php
array_pop($array);
```

---

### array_shift()

Removes the first element.

```php
array_shift($array);
```

---

### array_keys()

Returns the keys of an associative array.

```php
array_keys($array);
```

Store the result in a variable and traverse it using a `foreach` loop.

---

### array_values()

Returns the values of an associative array.

```php
array_values($array);
```

---

### array_flip()

Swaps keys and values.

```php
array_flip($array);
```

---

### array_reverse()

Changes the order of the array.

```php
array_reverse($array);
```

---

### count()

Returns the number of elements.

```php
count($array);
```

---

# 14. isset() and empty()

## isset()

Returns `TRUE` when a variable:

- Has been declared
- Is not `NULL`

```php
isset($variable);
```

---

## empty()

Returns `TRUE` when a variable is considered empty.

Examples mentioned in the notes include:

```text
Not declared
false
NULL
""
```

Usage:

```php
empty($variable);
```

---

# 15. Radio Buttons

When multiple radio buttons belong to the same group, their `name` attribute should be the same.

This allows the user to select only one option from that group.

---

# 16. Checkboxes

Basic checkbox syntax:

```html
<input type="checkbox" name="" value="">
```

To work with multiple checkbox values as an array, assign the same name and add `[]`.

Example structure:

```html
<input type="checkbox" name="items[]" value="">
```

---

# 17. Functions

Functions allow you to:

> Write code once and reuse it whenever needed.

A function is invoked by writing its name followed by parentheses.

Example:

```php
add();
```

---

# 18. String Functions

PHP includes many built-in functions for manipulating strings.

| Function | Description |
| --- | --- |
| `strtolower($string)` | Converts letters to lowercase |
| `strtoupper($string)` | Converts letters to uppercase |
| `trim($string)` | Removes spaces before and after a string |
| `str_pad($string)` | Pads a string to a specified number of characters |
| `str_replace("-", "/", $string)` | Replaces `-` with `/` |
| `strrev($string)` | Reverses a string |
| `str_shuffle($string)` | Shuffles characters in a string |
| `strcmp($string1, $string2)` | Compares two strings |
| `strlen($string)` | Counts characters |
| `strpos($string, " ")` | Finds the position of a given argument |
| `substr(...)` | Creates part of a string |
| `explode(" ", $string)` | Converts a string into an array |
| `implode("Separator", $stringArray)` | Converts a string array into a normal string |

---

## strcmp()

Example:

```php
strcmp($string1, $string2);
```

Possible results described in the notes:

```text
0  → Strings are the same
1  → Different
-1 → Different
```

---

## explode()

Example:

```php
explode(" ", $string);
```

This divides the string based on the supplied separator and returns an array.

---

## implode()

Example:

```php
implode("Separator", $stringArray);
```

This joins array elements into a normal string.

---

# 19. Sanitize & Validate

PHP provides filtering functions for user input.

Basic structure:

```php
filter_input(method, input_name, filter_type);
```

---

## Sanitization

Sanitization is used to filter input.

### FILTER_SANITIZE_SPECIAL_CHARS

```php
FILTER_SANITIZE_SPECIAL_CHARS
```

Used for filtering special characters.

### FILTER_SANITIZE_NUMBER_INT

```php
FILTER_SANITIZE_NUMBER_INT
```

Used with integer input.

### FILTER_SANITIZE_EMAIL

```php
FILTER_SANITIZE_EMAIL
```

Used with email input.

---

## Validation

Validation determines whether the supplied input follows the required format.

Invalid input may return `false`.

### Integer Validation

```php
FILTER_VALIDATE_INT
```

Used to validate integer input.

### Email Validation

```php
FILTER_VALIDATE_EMAIL
```

Used to validate an email format.

---

# 20. Include Function

The `include()` function allows content from another file to be included inside the current PHP file.

Example:

```php
include("file.php");
```

Files can include:

```text
HTML
PHP
index.php
```

### Benefits

- Website sections become reusable.
- Changes only need to be made in one location.
- Duplicate code can be reduced.

---

# 21. Cookies

A cookie stores information about a user inside the user's web browser.

Cookies may be used for:

- Browsing preferences
- Targeted advertisements
- Other non-sensitive information

PHP uses the `setcookie()` function to create cookies.

Cookies can be accessed through the `$_COOKIE` superglobal.

---

## Cookie Syntax

```php
setcookie(
    "key",
    "value",
    expiration_time,
    file_path
);
```

Expiration time can be calculated using:

```php
time()
```

---

## Inspecting Cookies in the Browser

Cookies can usually be inspected through browser developer tools.

Typical process:

```text
Right Click
    ↓
Inspect
    ↓
Application
    ↓
Storage
    ↓
Cookies
```

You can also open developer tools using:

```text
F12
```

and navigate to the Application section.

---

## Expiring a Cookie

The expiration time can be changed to expire a cookie.

Cookies can be accessed using:

```php
$_COOKIE
```

The values can also be traversed as:

```text
$key => $value
```

using a `foreach` loop.

---

# 22. Sessions

A session is used to store information about a user across multiple pages.

For example:

```text
User Login
    ↓
Session Created
    ↓
Session ID Assigned
    ↓
User moves between pages
    ↓
User remains logged in
```

A common example is remaining logged into a website while navigating between different pages.

---

## Starting a Session

```php
session_start();
```

---

## Session Superglobal

```php
$_SESSION
```

It can be used to store session information such as user credentials.

---

## Redirecting to Another Page

```php
header("Location: filename.php");
```

---

## Destroying a Session

```php
session_destroy();
```

This can be used when a user logs out.

---

# 23. Server Variables

`$_SERVER` is a PHP superglobal containing information related to:

- Headers
- Paths
- Script locations
- Web server environment

It behaves like an associative array.

Example:

```php
$_SERVER[]
```

---

## PHP_SELF

```php
$_SERVER["PHP_SELF"]
```

Represents the location of the current PHP page.

When used inside a form action, it can automatically reflect the current filename.

The notes recommend enclosing it with `htmlspecialchars()` to help avoid cross-site scripting issues.

---

## REQUEST_METHOD

```php
$_SERVER["REQUEST_METHOD"]
```

This can be used to determine whether the current request uses:

```text
GET
```

or:

```text
POST
```

By default, a page request is GET.

After a form configured with the POST method is submitted, the request method becomes POST.

---

# 24. Hashing

Hashing transforms sensitive information, such as passwords, into a different representation consisting of letters, numbers, and symbols through a mathematical process.

Hashing is technically different from encryption.

It can be used to help prevent the original password from being directly exposed.

---

## password_hash()

Use:

```php
password_hash($string, PASSWORD_DEFAULT);
```

### Parameters

**First parameter**

The original string or password.

```php
$string
```

**Second parameter**

The hashing algorithm or algorithm-related constant.

```php
PASSWORD_DEFAULT
```

---

## password_verify()

Used to compare a plain-text password against its stored hash.

```php
password_verify();
```

It returns either:

```text
true
```

or:

```text
false
```

depending on whether the password matches.

---

# 25. Connecting PHP to MySQL

There are two commonly used approaches mentioned in the notes:

1. MySQLi Extension
2. PDO — PHP Data Objects

For this beginner course, the notes use **MySQLi**.

---

## phpMyAdmin

When using XAMPP, phpMyAdmin can typically be accessed from:

```text
localhost/phpmyadmin
```

It can also be opened through the **Admin** option in the XAMPP Control Panel.

---

## mysqli_connect()

Used to connect PHP with the database.

```php
mysqli_connect(
    $db_server,
    $db_user,
    $db_password,
    $db_name
);
```

### Parameters

```php
$db_server
$db_user
$db_password
$db_name
```

---

## Reusing the Database Connection

The connection file can be included inside another PHP file.

```php
include("Connection Filename.php");
```

This avoids rewriting the connection logic.

---

# 26. Creating a Table Using phpMyAdmin

Basic process:

```text
Open phpMyAdmin
        ↓
Databases
        ↓
Create / Select Database
        ↓
Enter Table Name
        ↓
Choose Number of Columns
        ↓
Create
        ↓
Configure Columns
        ↓
Save
```

---

## Column Configuration

### Name

Defines the name of each column.

### Primary Key

IDs can be configured as the primary index depending on the database design.

### A_I

```text
A_I = Auto Increment
```

### VARCHAR

Used for storing character or string data.

```text
VARCHAR
```

### INT

Used for numerical data.

```text
INT
```

### CHAR

The original notes use `CHAR` for storing password-related data with a length of `255`.

```text
CHAR(255)
```

### DATETIME

Used for storing date and time values.

```text
DATETIME
```

### CURRENT_TIMESTAMP

Can be used as a default value.

```text
CURRENT_TIMESTAMP
```

---

## Preview SQL

The **Preview SQL** option can be used to inspect the SQL query before creating or changing the table.

---

## Browsing the Table

After creating the table:

```text
Save
 ↓
Browse
```

Initially, the table may contain column definitions but no rows.

---

## Manually Inserting Data

```text
Insert
   ↓
Enter Data
   ↓
Go
   ↓
Browse
```

The inserted row should then appear in the table.

---

## Deleting Data

Select the relevant delete option for the row and confirm the deletion.

---

# 27. Insert Data into MySQL Using PHP

A simple structure can use two PHP files:

```text
Connection File
      +
Index File
```

The database connection logic is placed inside the connection file.

The index file can include it using:

```php
include("connection.php");
```

---

## mysqli_close()

Used to close the database connection.

```php
mysqli_close($connection);
```

---

## mysqli_query()

Used to submit an SQL query to the database.

```php
mysqli_query($connection, $query);
```

Parameters:

```text
$connection → Database connection
$query      → SQL query
```

---

# 28. Retrieve Data from MySQL

The SQL `SELECT` statement is used to retrieve data.

Example:

```sql
SELECT * FROM users WHERE user = 'Zeeshan';
```

---

## mysqli_num_rows()

Used to check how many rows were returned by a query.

```php
mysqli_num_rows($result);
```

---

## mysqli_fetch_assoc()

Used to retrieve the next row from a result as an associative array.

```php
mysqli_fetch_assoc($result);
```

---

## Retrieving Multiple Rows

A `while` loop can be used with:

```php
mysqli_fetch_assoc($result);
```

to process multiple rows.

---

## Database Retrieval Flow

```text
Write SQL Query
      ↓
Execute Query
      ↓
Receive Result Object
      ↓
Fetch Row
      ↓
Process Data
```

For multiple rows:

```text
SQL Query
    ↓
mysqli_query()
    ↓
$result
    ↓
while loop
    ↓
mysqli_fetch_assoc()
    ↓
Display each row
```

---

# Quick Revision

## PHP Fundamentals

```text
PHP Syntax
Variables
Operators
Math Functions
```

## Decision Making

```text
if
else
elseif
switch
```

## Logical Operators

```text
&&
||
!
```

## Loops

```text
for
while
foreach
```

## Arrays

```text
array()
array_push()
array_pop()
array_shift()
array_reverse()
array_keys()
array_values()
array_flip()
count()
```

## Form Handling

```text
$_GET
$_POST
isset()
empty()
```

## String Functions

```text
strtolower()
strtoupper()
trim()
str_pad()
str_replace()
strrev()
str_shuffle()
strcmp()
strlen()
strpos()
substr()
explode()
implode()
```

## Input Filtering

```text
filter_input()
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
```

## State Management

```text
$_COOKIE
setcookie()

$_SESSION
session_start()
session_destroy()
```

## Server

```text
$_SERVER
PHP_SELF
REQUEST_METHOD
```

## Password Handling

```text
password_hash()
password_verify()
```

## MySQL

```text
mysqli_connect()
mysqli_query()
mysqli_num_rows()
mysqli_fetch_assoc()
mysqli_close()
```

---

# Learning Flow

```text
PHP Basics
    ↓
Variables & Operators
    ↓
Forms
    ↓
Conditions
    ↓
Loops
    ↓
Arrays
    ↓
Functions
    ↓
Input Handling
    ↓
Cookies & Sessions
    ↓
Server Variables
    ↓
Password Hashing
    ↓
MySQL
    ↓
Database Operations
```

---

# Repository Purpose

This repository can be used as:

- A beginner PHP learning resource
- A quick PHP revision guide
- A reference while practicing PHP
- A foundation before moving into more advanced PHP concepts
- A companion repository for hands-on PHP exercises

---

# Recommended Learning Approach

For each topic:

1. Read the concept.
2. Understand the syntax.
3. Write the code yourself.
4. Run it locally.
5. Experiment with different values.
6. Break the code intentionally.
7. Debug the errors.
8. Move to the next topic only after understanding the previous one.

---

# Technologies Covered

```text
PHP
HTML
MySQL
phpMyAdmin
XAMPP
```

---

# Final Note

The fastest way to learn PHP is not by memorizing syntax.

Build small programs, submit forms, manipulate arrays, work with sessions, connect databases, intentionally create errors, and debug them.

Practice each concept independently before combining everything into a complete project.

---

## Course Complete

```text
PHP Fundamentals      ✓
Forms                 ✓
Control Flow          ✓
Arrays                ✓
Functions             ✓
Input Handling        ✓
Cookies               ✓
Sessions              ✓
Security Basics       ✓
MySQL                 ✓
Database Operations   ✓
```

Keep building.
