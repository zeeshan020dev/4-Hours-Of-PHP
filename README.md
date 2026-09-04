# 4-Hour PHP Learning Guide

A structured beginner-friendly collection of PHP notes covering the fundamentals of PHP, forms, control flow, arrays, functions, sessions, security concepts, and MySQL database integration.

This repository is designed as a quick learning and revision resource for anyone getting started with PHP.

---

# Table of Contents

1. [Introduction to PHP](#1-introduction-to-php)
2. [Variables](#2-variables-in-php)
3. [Operators](#3-operators-in-php)
4. [GET & POST](#4-get--post)
5. [Math Functions](#5-math-related-functions)
6. [If Statements](#6-if-statements)
7. [Logical Operators](#7-logical-operators)
8. [Switch Statements](#8-switch-statements)
9. [For Loops](#9-for-loop)
10. [While Loops](#10-while-loop)
11. [`isset()`](#11-isset-function)
12. [Arrays](#12-arrays)
13. [Associative Arrays](#13-associative-arrays)
14. [`isset()` and `empty()`](#14-isset-and-empty)
15. [Radio Buttons](#15-radio-buttons)
16. [Checkboxes](#16-checkboxes)
17. [Functions](#17-functions)
18. [String Functions](#18-string-functions)
19. [Sanitize & Validate](#19-sanitize--validate)
20. [Include Function](#20-include-function)
21. [Cookies](#21-cookies)
22. [Sessions](#22-sessions)
23. [Server Variables](#23-server-variables)
24. [Hashing](#24-hashing)
25. [Connecting PHP to MySQL](#25-connecting-php-to-mysql)
26. [Creating a Table Using phpMyAdmin](#26-creating-a-table-using-phpmyadmin)
27. [Insert Data into MySQL Using PHP](#27-insert-data-into-mysql-using-php)
28. [Retrieve Data from MySQL](#28-retrieve-data-from-mysql)

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

> 💻 **Click Here to See the Code:** [View Code](https://github.com/zeeshan020dev/4-Hours-Of-PHP/blob/main/01.%20Index/1.%20index.php)
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

> 💻 **Click Here to See the Code:** [View Code](https://github.com/zeeshan020dev/4-Hours-Of-PHP/blob/main/02.%20Variables/2.%20Variables.php)
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

> 💻 **Click Here to See the Code:** [View Code](https://github.com/zeeshan020dev/4-Hours-Of-PHP/blob/main/03.%20Arithmetic/3.%20Arithmetic.php)
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

> 💻 **Click Here to See the Code:** [View Code](https://github.com/zeeshan020dev/4-Hours-Of-PHP/blob/main/04.%20Get%20%26%20Post%20Method/4.%20Get%20%26%20Post%20Method.php)
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

> 💻 **Click Here to See the Code:** [View Code]()
---

# 6. If Statements

An `if` statement executes code when a specified condition is true.

If the condition is false, the associated code is not executed.

### Important Points

- The order of `if` and `else` conditions matters.
- Conditional statements can work with Boolean variables.

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
---

# 8. Switch Statements

A `switch` statement can be used as an alternative to writing many `elseif` statements.

Benefits mentioned in the notes:

- Requires less code
- Can make multiple-condition logic easier to manage

> 💻 **Click Here to See the Code:** [View Code]()
---

# 9. For Loop

A `for` loop repeats a block of code a specified number of times.

It is useful when you already know approximately how many times the code should execute.

> 💻 **Click Here to See the Code:** [View Code]()
---

# 10. While Loop

A `while` loop also repeats code.

Its purpose is similar to a `for` loop, but its syntax and control structure are different.

The syntax is similar to loops commonly used in languages such as C++.

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
---

# 15. Radio Buttons

When multiple radio buttons belong to the same group, their `name` attribute should be the same.

This allows the user to select only one option from that group.

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
---

# 17. Functions

Functions allow you to:

> Write code once and reuse it whenever needed.

A function is invoked by writing its name followed by parentheses.

Example:

```php
add();
```

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
---

# 26. Creating a Table Using phpMyAdmin

phpMyAdmin provides a graphical interface for creating and managing MySQL databases and tables.

Follow these steps to create a table, configure its columns, insert data manually, and manage records.

---

## Step 1: Open phpMyAdmin

1. Start **Apache** and **MySQL** from the XAMPP Control Panel.
2. Open your browser.
3. Navigate to:

```text
http://localhost/phpmyadmin/
````

4. phpMyAdmin will open in your browser.

---

## Step 2: Create or Select a Database

1. Click **Databases** from the top navigation bar.
2. If you already have a database, select it.
3. If you do not have one:

   * Enter a database name.
   * Click **Create**.
   * Select the newly created database.

```text
phpMyAdmin
    ↓
Databases
    ↓
Create / Select Database
```

---

## Step 3: Create a New Table

After selecting the database:

1. Enter the **table name**.
2. Specify the **number of columns** required.
3. Click **Create**.

Example:

```text
Table Name: users
Number of Columns: 5
```

---

## Step 4: Configure Table Columns

phpMyAdmin will display a form where you can define each column.

In the **Name** field, enter the name of each column.

Example structure:

| Column       | Type       | Length | Index     | A_I |
| ------------ | ---------- | ------ | --------- | --- |
| `id`         | `INT`      | —      | `PRIMARY` | ✅   |
| `username`   | `VARCHAR`  | —      | —         | —   |
| `password`   | `CHAR`     | `255`  | —         | —   |
| `email`      | `VARCHAR`  | —      | —         | —   |
| `created_at` | `DATETIME` | —      | —         | —   |

---

## Step 5: Configure the ID Column

For an ID column:

1. Set the column name, for example:

```text
id
```

2. Set its type to:

```text
INT
```

3. Set the **Index** to:

```text
PRIMARY
```

4. Enable:

```text
A_I
```

`A_I` stands for **Auto Increment**.

This automatically increases the ID whenever a new row is inserted.

Example:

```text
1
2
3
4
5
...
```

---

## Step 6: Select Appropriate Data Types

Different types of data require different MySQL data types.

### VARCHAR

`VARCHAR` is used for storing characters or strings.

Examples:

```text
username
email
name
address
```

Example:

```text
VARCHAR
```

---

### INT

`INT` is used for storing integer numbers.

Examples:

```text
id
age
quantity
```

Example:

```text
INT
```

---

### CHAR

In this project, `CHAR` is used for storing the password after applying a hashing algorithm.

Example:

```text
CHAR(255)
```

The length is set to:

```text
255
```

---

### DATETIME

`DATETIME` is used for storing both date and time.

Example:

```text
DATETIME
```

For the default value, use:

```text
CURRENT_TIMESTAMP
```

This can automatically store the current date and time when a new row is created.

---

## Step 7: Preview the SQL Query

Before creating the table:

1. Click **Preview SQL**.
2. phpMyAdmin will display the SQL query that will be executed.

This allows you to review the SQL statement before applying it.

Example structure:

```sql
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password CHAR(255),
    email VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

---

## Step 8: Save the Table

After configuring all columns:

1. Review your settings.
2. Click **Save**.
3. phpMyAdmin will create the table.

The table will now appear under your selected database.

---

## Step 9: View the Table

To view the newly created table:

1. Select the table.
2. Click **Browse**.

Initially, you will see the column names, but there may be no rows because no data has been inserted yet.

Example:

```text
users

id | username | password | email | created_at
------------------------------------------------
```

---

## Step 10: Insert Data Manually

To manually add a row:

1. Select your table.
2. Click **Insert**.
3. Enter values for the required columns.

Example:

```text
username: Zeeshan
password: example_password
email: zeeshan@example.com
```

4. Click **Go**.

phpMyAdmin will execute the insertion query.

---

## Step 11: View Inserted Data

After inserting the data:

1. Click **Browse**.
2. The newly inserted row will now appear inside the table.

Example:

```text
id | username | password         | email                | created_at
---------------------------------------------------------------------------
1  | Zeeshan  | example_password | zeeshan@example.com  | ...
```

---

## Step 12: Delete a Row

To delete a record:

1. Open the table.
2. Click **Browse**.
3. Locate the row you want to remove.
4. Click **Delete**.
5. Click **OK** to confirm.

The selected row will be removed from the table.

---

## Quick Reference

| Setting             | Purpose                                             |
| ------------------- | --------------------------------------------------- |
| `PRIMARY`           | Sets a column as the primary key                    |
| `A_I`               | Enables Auto Increment                              |
| `VARCHAR`           | Stores strings or character data                    |
| `INT`               | Stores integer numbers                              |
| `CHAR`              | Stores fixed-length character data                  |
| `DATETIME`          | Stores date and time                                |
| `CURRENT_TIMESTAMP` | Uses the current date and time as the default value |
| **Preview SQL**     | Displays the SQL query before execution             |
| **Browse**          | Displays records stored in the table                |
| **Insert**          | Adds a new record manually                          |
| **Delete**          | Removes an existing record                          |

> 💻 **Click Here to See the Code:** [View Code]()
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

> 💻 **Click Here to See the Code:** [View Code]()
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

## Author ✍️

Click the box below to visit the author's GitHub profile and explore more projects, open-source work, and contributions.

<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="220px">
        <a href="https://github.com/zeeshan020dev">
          <img src="https://github.com/zeeshan020dev.png?size=100" width="100px;" alt="Muhammad Zeeshan Islam"/>
          <br />
          <sub><b>Muhammad&nbsp;Zeeshan&nbsp;Islam</b></sub>
        </a>
        <br />
        <a href="https://github.com/zeeshan020dev" title="GitHub Profile">💻</a>
        <a href="https://github.com/zeeshan020dev" title="Documentation">📖</a>
      </td>
    </tr>
  </tbody>
</table>
