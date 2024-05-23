# PHP-Zoo-Project
# Zoo-php


## Files

### `index.php`

The main entry point for the application. It displays the list of animals in the zoo.

### `header.php`

Contains the HTML header information and links to CSS files. This file is included in other views to ensure consistent styling.

### `init.php`

Initializes the zoo instance and loads the animals.

### `views/index.view.php`

Displays the list of all animals with links to view details about each animal.

### `views/base.view.php`

Displays the details of a selected animal.

### `assets/css/pico.classless.lime.min.css`

A minimal classless CSS framework for basic styling.

## Entities

### `Base.php`

Defines the `Creature` abstract class, which serves as the base class for all animals in the zoo. It includes properties like name, weight, and methods to get and set these properties.

### `Cats.php`

Defines the `Cat` abstract class, which extends the `Creature` class. It adds a `dangerLevel` property and an abstract method `makeSound`.

### `Lion.php`

Defines the `Lion` class, which extends the `Cat` class. It implements the `makeSound` and `interact` methods specific to lions.

### `Rhino.php`

Defines the `Rhino` class, which extends the `Creature` class. It implements the `interact` method specific to rhinos.

### `Tiger.php`

Defines the `Tiger` class, which extends the `Cat` class. It implements the `makeSound` and `interact` methods specific to tigers.

## Usage

1. Clone the repository to your local machine.
2. Ensure you have a web server with PHP installed (e.g., XAMPP, WAMP, MAMP).
3. Place the `zoo_project` directory in your web server's root directory.
4. Open a web browser and navigate to `http://localhost/zoo_project/index.php`.
5. Click on an animal to view its details.
