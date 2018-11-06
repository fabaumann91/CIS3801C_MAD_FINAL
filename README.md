# GBParking

This is a website for GBParking.com. The site is meant to allow people that tailgate for Green Bay Packer games to access information regarding a parking location before games. 

## Installation instructions 

This project is very simple to install.

1. Download the project
2. Unzip the project into the web server html document location
3. Restore the MySQL backup into a MySql database
4. Change the host, database name, username, and password variables in the 'nextgame.php' file

	$servername = "localhost:3306";
	$username = "your_username";
	$password = "your_password";
	$dbname = "gbparking"; 

## Usage

This site should be used to display information regarding the GBParking location and how to reserve a spot.
	
## Credits

* **Frank Baumann** - *Initial Work Author*

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
