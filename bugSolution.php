```php
$file = fopen("test.txt", "r+");
if ($file === false) {
    // Handle the error appropriately
    die("Error opening file: " . error_get_last()['message']);
} else {
    // ... process the file ...
    fclose($file);
}
```
This improved version explicitly checks if `fopen` returned `false`. If it did, an error message is displayed (using `error_get_last()` for more details), and execution stops using `die()`.  Error handling can be further refined to include logging, alternative actions, or more user-friendly feedback.