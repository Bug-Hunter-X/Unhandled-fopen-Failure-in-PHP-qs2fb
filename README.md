# Unhandled fopen Failure in PHP

This repository demonstrates a common error in PHP file handling: failing to check the return value of `fopen`.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version.

The bug arises from not checking if `fopen` successfully opened the file before proceeding to operate on it. If the file doesn't exist or can't be opened, `fopen` returns `false`, but the program may still attempt to read from or write to the non-existent resource, leading to errors. This can range from warnings to segmentation faults depending on the PHP version and operating system.

The solution ensures that the return value is checked to verify the file was opened successfully before proceeding.  Robust error handling is crucial for preventing unexpected application behavior and crashes.