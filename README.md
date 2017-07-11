# application
This repo will be a practice env for laravel framework.

### Instructions
* [Download](https://getcomposer.org/download/) composer on windows.
* Clone repository using the command:
```
>> git clone https://github.com/arelbernardo/application.git
```
* go to <project_folder>/httpdocs and run:
```
>> composer update
```
* Install [Node.js](https://nodejs.org/en/)
* Install grunt. Go to< project_folder> and run:
```
>> npm install grunt --save-dev
```
* After installing grunt, run:
```
>> npm install -g grunt-cli
```
* run these for grunt dependencies:
```
>>> npm install grunt-contrib-uglify --save-dev
>>> npm install grunt-contrib-watch --save-dev
>>> npm install grunt-contrib-compass --save-dev
>>> npm install grunt-contrib-concat --save-dev
```
_these are for grunt task runner dependencies for compiling javascript files etc_

* run ``` php artisan migrate ``` then ``` php artisan db:seed ```


### author
[arelbernardo](https://www.facebook.com/arelbernardo)
