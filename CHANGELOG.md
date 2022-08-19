# CHANGELOG

## 1.1.5 - 2022-08-19

* **The repository was archived.**

* The option was enabled to add files in the `config` directory without having to return any value.

* The `Eliasis\Framework\App::getOption()` method now returns null instead of an empty string if the option does not exist.

* The `Eliasis\Framework\View::getOption()` method now returns null instead of an empty string if the option does not exist.

* `Eliasis\Framework\Model` will try to create a connection to the database using the configuration with ID `app`. If it is not found, it will not create a connection to the database.

* The `config` directory has been removed. It was only used to add the current version of the framework.

* Now the configuration files will only be loaded when the option is requested.

* `Eliasis\Complement\Traits\ComplementHandler::getSettings()` method was renamed to `Eliasis\Complement\Traits\ComplementHandler::setSettings()`.

* The `after-load-hooks` action hook was renamed to `after_set_application_hooks`.

* `before_run_complements` action hook was added.

* `after_run_complements` action hook was added.

* `Eliasis\Framework\App::getInstance()` was renamed to `Eliasis\Framework\App::getAppInstance()`

* Deprecated `Eliasis\Framework\App::getControllerInstance()` method. It will be removed in future versions.

* Added `Eliasis\Framework\App::getInstance()` method. Will be used instead of `Eliasis\Framework\App::getControllerInstance()` and any kind of instance can be obtained.

* Deleted `Eliasis\Framework\Controller::getViewInstance()` method.

* Added `Eliasis\Framework\Entity` class.

* Renamed `Eliasis\Framework\Model::changeDatabaseConnection()` method to `Eliasis\Framework\Model::setDatabaseConnection()`.

## 1.1.4 - 2018-05-07

* Added `Eliasis\Framework\View::setHash()` method.

* Added method `View::setHash()` to fixed imprecise paths in Windows.

## 1.1.3 - 2018-04-17

* Added `after-load-hooks` action hook.
* Added `ROOT_URL()` option.

## 1.1.3 - 2018-02-19

* Documentation was added.

* Deleted `Eliasis\App::id()` method.
* Deleted `Eliasis\Framework\App::instance()` method.
* Deleted `Eliasis\Framework\App::set()` method.
* Deleted `Eliasis\Framework\App::get()` method.
* Deleted `Eliasis\Framework\View::get()` method.

## 1.1.2 - 2018-01-09

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

* Implemented `PSR2 code standard` from all library PHP files.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Deprecated `Eliasis\App::id()` method.

* Added `Eliasis\Framework\App::getCurrentID()` method.

* Added `Eliasis\Framework\App::setCurrentID()` method.

* Deprecated `Eliasis\Framework\App::instance()` method.

* Added `Eliasis\Framework\App::getControllerInstance()` method.

* Deprecated `Eliasis\Framework\App::set()` method.

* Added `Eliasis\Framework\App::setOption()` method.

* Deprecated `Eliasis\Framework\App::get()` method.

* Added `Eliasis\Framework\App::getOption()` method.

* Deprecated `Eliasis\Framework\View::get()` method.

* Added `Eliasis\Framework\View::getOption()` method.

## 1.1.1 - 2017-09-07

* Deleted `Eliasis\App\App->_runModules()` method.

* Added `Eliasis\App\App->_runComplements()` method.

* Deleted `config/modules.php` settings file.

* Deleted `Eliasis\Cleaner\Cleaner->_runCleaner()` method.

## 1.1.0 - 2017-06-24

* Added `Eliasis\App\App->_runHooks()` method.

* The action hooks load was added again.

* Added `Eliasis\App\App->_getIp()` method.

* The ip will now be saved if the `Josantonius\Ip\Ip` library is used.

## 1.0.9 - 2017-06-08

* Added `Eliasis\App\App->set()` method.
* Added `Eliasis\App\App->get()` method.
* Added `Eliasis\App\App->instance()` method.

* Added `Eliasis\View\View->get()` method.

* Deprecated `Eliasis\App\App->addOption()` method.

The `addOption()` method will be deleted in the next version. It will be replaced by the `set()` method and will be removed in the next version.

* Added `config/modules.php` settings file.

## 1.0.8 - 2017-06-02

* Deleted `VERSION.txt` file.

* The `addOption()` method was improved.

## 1.0.7 - 2017-05-27

* Deleted `Eliasis\Module\Module` class.

* Deleted `Eliasis\App\App->_runHooks()` method.

* The Module library was deleted. Now the addition of modules for Eliasis Framework will not be included in the core and can optionally be added from <https://github.com/Eliasis-Framework/Modules.git>.

* Added verification for the Module library on App class.

## 1.0.6 - 2017-05-16

* Added `Eliasis\Model\Model->_getDatabaseInstance` method.

* Added a method for compatibility with the Josantonius\Database\Database library. If it exists, it will get the connection to the database and save it in the $db attribute that will be available on all models.

* Database will get the connection parameters from the Eliasis Framework configuration files. It should have the following structure:

'db' => [

    'identifier' => [
        'id'         => 'identifier',
        'prefix'     => 'identifier_',
        'provider'   => 'PDOprovider',
        'host'       => 'localhost',
        'user'       => 'db_user',
        'name'       => 'db_name',
        'password'   => 'db_password',
        'settings'   => ['charset' => 'utf8'],
    ],
]

* Database class url: <https://github.com/Josantonius/PHP-Database>

## 1.0.5 - 2017-04-29

* Added `Eliasis\Module\Module::getModulesInfo()` method.
A new method was added to obtain basic information for all loaded modules.

## 1.0.4 - 2017-04-26

* The method of accessing the App object for multiapplications has been changed, the identifier is indicated directly when instantiating it. For example:

App::Identifier('namespace', 'controller');

Instead of

App::id('Identifier');
App::('namespace', 'controller');

## 1.0.3 - 2017-04-14

* Deleted `Eliasis\Module\Module->getNamespace()` method.
* Deleted `Eliasis\Module\Module->getUrl()` method.
* Deleted `Eliasis\Module\Module->getPath()` method.
* Deleted `Eliasis\Module\Module->getFolder()` method.

## 1.0.2 - 2017-04-06

* Modified the startup mode of the framework to allow the creation and operation of several applications at once.

* Added   `Eliasis\App\App::id()` method.
* Added   `Eliasis\App\App::run()` method.
* Added   `Eliasis\App\App::getInstance()` method.
* Deleted `Eliasis\App\App->__construct()` method.

* Added `Eliasis\Model\Model` abstract class.
* Added `Eliasis\Model\Model->__construct()` method.
* Added `Eliasis\Model\Model::getInstance()` method.
* Added `Eliasis\Model\Model->__wakeup()` method.
* Added `Eliasis\Model\Model->__clone()` method.

* Added `Eliasis\Model\Exception\ModelException` class.
* Added `Eliasis\Model\Exception\ModelException->__construct()` method.

* Added `Eliasis\Controller\Controller::getModelInstance()` method.

## 1.0.1 - 2017-03-15

* Deleted `Eliasis\Hook\Hook` class.
* Deleted `Eliasis\Hook\Hook::getInstance()` method.
* Deleted `Eliasis\Hook\Hook::setHook()` method.
* Deleted `Eliasis\Hook\Hook::setHooks()` method.
* Deleted `Eliasis\Hook\Hook::addHook()` method.
* Deleted `Eliasis\Hook\Hook::run()` method.
* Deleted `Eliasis\Hook\Hook::loadModules()` method.
* Deleted `Eliasis\Hook\Hook->collectHook()` method.

* Deleted `Eliasis\Hook\Exception\HookException` class.
* Deleted `Eliasis\Hook\Exception\HookException->__construct()` method.

* Deleted `Eliasis\Route\Route` class.
* Deleted `Eliasis\Route\Route::addRoute()` method.
* Deleted `Eliasis\Route\Route::getRoute()` method.
* Deleted `Eliasis\Route\Route::loadRegexRoutes()` method.

* Deleted `Eliasis\Router\Router` class.
* Deleted `Eliasis\Router\Router::__callstatic()` method.
* Deleted `Eliasis\Router\Router::error()` method.
* Deleted `Eliasis\Router\Router::haltOnMatch()` method.
* Deleted `Eliasis\Router\Router::invokeObject()` method.
* Deleted `Eliasis\Router\Router::_parseUrl()` method.
* Deleted `Eliasis\Router\Router::dispatch()` method.
* Deleted `Eliasis\Router\Router::_checkRoutes()` method.
* Deleted `Eliasis\Router\Router::_getUri()` method.
* Deleted `Eliasis\Router\Router::_checkRegexRoutes()` method.
* Deleted `Eliasis\Router\Router::_verifyPath()` method.

* Deleted `Eliasis\Data\Data` class.

* Deleted `Eliasis\App\App::getRoutes()` method.
* Deleted `Eliasis\App\App::_setConstants()` method.
* Added   `Eliasis\App\App->_runErrorHandler()` method.
* Added   `Eliasis\App\App->_runCleaner()` method.
* Added   `Eliasis\App\App->_runHooks()` method.
* Added   `Eliasis\App\App->_runModules()` method.
* Added   `Eliasis\App\App->_runRoutes()` method.
* Added   `Eliasis\App\App->_setPaths()` method.
* Added   `Eliasis\App\App->_setUrls()` method.

* Deleted `Eliasis\App\Exception\AppException` class.
* Deleted `Eliasis\App\Exception\AppException->__construct()` method.

* Deleted `Eliasis\Module\Module->addResource()` method.
* Added   `Eliasis\Module\Module->addResources()` method.

* Deleted `Josantonius/Cleaner` library.
* Deleted `Josantonius/Asset` library.
* Deleted `Josantonius/ErrorHandler` library.

## 1.0.0 - 2017-03-09

* Added `Eliasis\App\App` class.
* Added `Eliasis\App\App::_setConstants()` method.
* Added `Eliasis\App\App::getSettings()` method.
* Added `Eliasis\App\App::addOption()` method.
* Added `Eliasis\App\App::_setRoutes()` method.
* Added `Eliasis\App\App::__callstatic()` method.

* Added `Eliasis\App\Exception\AppException` class.
* Added `Eliasis\App\Exception\AppException->__construct()` method.

* Added `Eliasis\Controller\Controller` abstract class.
* Added `Eliasis\Controller\Controller->__construct()` method.
* Added `Eliasis\Controller\Controller::getInstance()` method.
* Added `Eliasis\Controller\Controller::getViewInstance()` method.
* Added `Eliasis\Controller\Controller->__wakeup()` method.
* Added `Eliasis\Controller\Controller->__clone()` method.

* Added `Eliasis\Controller\Exception\ControllerException` class.
* Added `Eliasis\Controller\Exception\ControllerException->__construct()` method.

* Added `Eliasis\Data\Data` class.

* Added `Eliasis\Hook\Hook` class.
* Added `Eliasis\Hook\Hook::getInstance()` method.
* Added `Eliasis\Hook\Hook::setHook()` method.
* Added `Eliasis\Hook\Hook::setHooks()` method.
* Added `Eliasis\Hook\Hook::addHook()` method.
* Added `Eliasis\Hook\Hook::run()` method.
* Added `Eliasis\Hook\Hook::loadModules()` method.
* Added `Eliasis\Hook\Hook->collectHook()` method.

* Added `Eliasis\Hook\Exception\HookException` class.
* Added `Eliasis\Hook\Exception\HookException->__construct()` method.

* Added `Eliasis\Module\Module` class.
* Added `Eliasis\Module\Module::getInstance()` method.
* Added `Eliasis\Module\Module->_setInfo()` method.
* Added `Eliasis\Module\Module->addResource()` method.
* Added `Eliasis\Module\Module->getNamespace()` method.
* Added `Eliasis\Module\Module->getUrl()` method.
* Added `Eliasis\Module\Module->getPath()` method.
* Added `Eliasis\Module\Module->getFolder()` method.
* Added `Eliasis\Module\Module::__callstatic()` method.

* Added `Eliasis\Module\Exception\ModuleException` class.
* Added `Eliasis\Module\Exception\ModuleException->__construct()` method.

* Added `Eliasis\Model\Model` abstract class.

* Added `Eliasis\Route\Route` class.
* Added `Eliasis\Route\Route::addRoute()` method.
* Added `Eliasis\Route\Route::getRoute()` method.
* Added `Eliasis\Route\Route::loadRegexRoutes()` method.

* Added `Eliasis\Router\Router` class.
* Added `Eliasis\Router\Router::__callstatic()` method.
* Added `Eliasis\Router\Router::error()` method.
* Added `Eliasis\Router\Router::haltOnMatch()` method.
* Added `Eliasis\Router\Router::invokeObject()` method.
* Added `Eliasis\Router\Router::_parseUrl()` method.
* Added `Eliasis\Router\Router::dispatch()` method.
* Added `Eliasis\Router\Router::_checkRoutes()` method.
* Added `Eliasis\Router\Router::_getUri()` method.
* Added `Eliasis\Router\Router::_checkRegexRoutes()` method.
* Added `Eliasis\Router\Router::_verifyPath()` method.

* Added `Eliasis\View\View` abstract class.
* Added `Eliasis\View\View->renderizate()` method.
* Added `Eliasis\View\View->addHeader()` method.
* Added `Eliasis\View\View->addHeaders()` method.
* Added `Eliasis\View\View->sendHeaders()` method.

* Added `config/info.php` settings file.

* Added `Josantonius/Cleaner` library.
* Added `Josantonius/Url` library.
* Added `Josantonius/Asset` library.
* Added `Josantonius/ErrorHandler` library.
