#Using a Config File

It is considered good practice to store all configuration information (e.g. username and password for database access) in a configuration or config file. 
 Then we can make simple changes to our applications (move to a different server, switch to a different database) without having to sift through PHP code. 

Create a new folder, name it *config*. Create a new PHP file, save it in the config folder and name it *config.php*. Add the following to *config.php* (change the settings to match your database).

```
return [
    "base-url"=>"http://localhost/cit2318/config/",
    "view-path"=>"views/",
    "database"=>[
        "username" => "u0123456",
        "password" => "01jan96",
        "host" => "localhost",
        "dbname" => "u0123456"
    ],
]
```

This simple declares an associative array containing our configuration info. 

Open index.php. At the top of this file add the following code

```
$config = require_once("config/config.php");

$viewPath = $config["view-path"];
echo $viewPath;
```

Put *index.php* on a web server. Check this works.

* Add another echo statement to output the name of your database

##Adding a Config class

To make the config info accessible to all parts of out application we will use a config class.

Create the following class, save it as *Config.php* in the root folder of the application.

```
namespace ConfigExample;

class Config {
    private static $config = [];
    static function setConfig($path)
    {
        self::$config = require_once($path);
    }
    static function get($configItem)
    {
        return self::$config[$configItem];
    }
}

```

Now change *index.php* so that it uses the Config class instead of loading the config data directly. 

```
use ConfigExample\Config;

//these four lines are the new ones
require_once("Config.php");
Config::setConfig("config/config.php");
$viewPath=Config::get("view-path");
echo $viewPath;

require_once("models/film-model.php");

if(isset($_GET["action"])){
    $action=$_GET['action'];
}else{
    $action="list";
}

if ($action==="list") {
    $films=getAllFilms();
    $pageTitle="List all films";
    include("views/list-view.php");
} else if ($action==="details" && isset($_GET['id'])) {
    $film=getFilmById($_GET['id']);
    $pageTitle="Film details";
    include("views/details-view.php");
} else {
    include("views/404-view.php");
}
```

* Modify the include statements so they use the view path from the config file
* Open film-model.php. Modify getConnection() function so that it uses the Config class to retrieve the database settings. 