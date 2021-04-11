# testyourstuff-php-website

Hello again PHP. It has been a long time since we last met. This time
a little bit better, but still pure PHP without any frameworks.
</br></br>
### Features
  * Function and content are separated (index.php -> url routing -> views -> html)
  * .htaccess redirects all requests to index.php, the requests are then routed to their views over urls.php "routing"
  * Views can be "annotated" when login is required
  * Login authentication is stored in session cookie, auto logout after x minutes
  * Login credentials stored in database, passwords are hashed
  * Non-existing URLs are redirected to custom 404 page
</br></br>
### Deployment
Deployment for this project is over git -> gitHub -> Webhook -> CyberPanel git management.
That means the project is automatically deployed when pushing onto deployment branch.
  * Configuration file is not beeing tracked -> store one folder above index.php root folder (config.php)
  * .htaccess file is not beeing tracked
</br></br>
### ToDo
  * Most of the content (except the login page)
  * A proper .htaccess file + documentation
  * Find a way to include other projects
  * Find better way to automatically include configuration files (development / production)
</br></br>
### Sequence Diagram
![header image](docs/testmystuff.png?raw=true "testmystuff sequence diagram")
