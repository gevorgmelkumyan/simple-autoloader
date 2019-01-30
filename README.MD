# Simple autoloader

### Description

This is a simple autoloader, that implements the following ```file => namespace``` mapping:
```
"\path\to\class\ClassName.php" file has "Path\To\Class" namespace and "ClassName" class (trait, interface, etc) in it
```

### P.S.:

The project also contains some kind of HTML/CSS rendering classes, demonstrating basic usage of the autoloader.

### Requirements
- PHP 7.1 or above

### Installation
- Clone or download this repository
- Run ```php -S localhost:8080``` in the ```index.php```'s directory
- Go to ```http://localhost:8080/```

### Notice

You can use any other available port in your machine, instead of 8080.