# Tärpistö

Upload-table luonnos

## Idea

Make a table to upload exams to TKO-äly's Tärpistö  

Benefits
* Easy upload of recent exams
* Automatic filenaming
  * No need to manually name files
  * Malicious filenames like `/index.php` will be overwritten
* No duplicate uploads
* Visualizes a goal of _100% of exams uploaded to Tärpistö_

### Development

* Install php-cli `sudo apt-get install php5-cli`
* Run `php -S localhost:8080`