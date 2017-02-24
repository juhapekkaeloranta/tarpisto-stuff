# Tärpistö

[Upload-table luonnos](https://juhapekkamoilanen.github.io/tarpisto-stuff/upload_table.html)

## Idea

Make a table to upload exams to TKO-äly's Tärpistö.  
Uses a list of course exams [https://www.cs.helsinki.fi/exams/course-exams](https://www.cs.helsinki.fi/exams/course-exams) converted to [json](https://github.com/juhapekkamoilanen/tarpisto-stuff/blob/master/cs_exams_2017_period_3.json)

**Benefits**
* Easy upload of recent exams
* Automatic filenaming
  * No need to manually name files
  * Malicious filenames like `/index.php` will be overwritten
  * Possible to give upload-rights to all tko-äly members?
* No duplicate uploads
* Visualizes a goal of _100% of exams uploaded to Tärpistö_

### Development

* Install php-cli `sudo apt-get install php5-cli`
* Run `php -S localhost:8080`
