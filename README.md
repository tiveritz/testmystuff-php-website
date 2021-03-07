# web-training-with-php-and-database

Hello again PHP. It has been a long time since we last met, May 2020. This time
a little bit better, but still pure PHP without any frameworks.
</br></br>
### Features
  * Login required to see content
  * Login authentication is stored in session cookie, auto logout after x minutes
  * Login credentials stored in database, passwords are hashed
  * Non-existing URLs redirect to starting page
</br></br>
### Deployment
Deployment for this project is over git -> gitHub -> Webhook -> CyberPanel git management.
That means the project is automatically deployed when pushing onto deployment branch.
  * Configuration file is not beeing tracked -> store one folder above index.php root folder (config.php)
  * URL routing is handled by index.php, the prepared .htaccess file is required to make it work
  * The databases are not created automatically, do manually on your server
</br></br>