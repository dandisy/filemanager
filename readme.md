# FileManager for Webcore

Custom file manager for Webcore

For https://github.com/dandisy/webcore

based on https://github.com/Krato/Laravel-5-File-Manager

![screenshot-1](https://cloud.githubusercontent.com/assets/74367/15646143/77016990-265c-11e6-9ecc-d82ae2c74f71.png)


### Note

    add meta csrf_token in html head section


### Installation

First require this package:

```sh
composer require dandisy/filemanager
composer require intervention/image
```

Add the provider on ‘app.php’:
```php
Webcore\FileManager\FileManagerServiceProvider::class,
```

Aliase to `Zipper` is automatic loaded from `FileManagerServiceProvider (It's required to download folders in zip format): 


Publish config, views and public files:
```php
php artisan vendor:publish --provider="Webcore\FileManager\FileManagerServiceProvider"
```

Then you need to modify options on new file on options `filemanager.php`

```php
<?php

return array(


    /*
    |--------------------------------------------------------------------------
    | Path home for your file manager
    |--------------------------------------------------------------------------
    |
    */
    'homePath'  => storage_path('app/public'),

    /*
    |--------------------------------------------------------------------------
    | Default routes for your file manager. You can modify here:
    |--------------------------------------------------------------------------
    |
    */
    'defaultRoute'  => 'assets',

    /*
    |--------------------------------------------------------------------------
    | Directory for your assets, relative to laravel public directory:
    |--------------------------------------------------------------------------
    |
    */
    'assetsDirectory'  => '/storage',


    /*
    |--------------------------------------------------------------------------
    | User middleware. You can use or single string or array based
    |--------------------------------------------------------------------------
    |
    */
    'middleware'  => ['web', 'auth'],


    /*
    |--------------------------------------------------------------------------
    | Use this options if you want to sanitize file and folder names
    |--------------------------------------------------------------------------
    |
    */
    'validName'  => true,

    /*
    |--------------------------------------------------------------------------
    | Files You don't want to show on File Manager
    |--------------------------------------------------------------------------
    |
    */
    'exceptFiles'   => array( 'robots.txt', 'index.php', '.DS_Store', '.Thumbs.db'),


    /*
    |--------------------------------------------------------------------------
    | Folders names you don't want to show on File Manager
    |--------------------------------------------------------------------------
    |
    */
    'exceptFolders' => array( 'vendor', 'thumbs', 'filemanager_assets', 'microsite'),


    /*
    |--------------------------------------------------------------------------
    | Extensions you don't want to show on File Manager
    |--------------------------------------------------------------------------
    |
    */
    'exceptExtensions'  => array( 'php', 'htaccess', 'gitignore'),

    /*
    |--------------------------------------------------------------------------
    | Append tu url. For if you use a custom service to load assets by url. Example here: http://stackoverflow.com/a/36351219/4042595
    |--------------------------------------------------------------------------
    |
    */
    'appendUrl'  => null,

    /*
    |--------------------------------------------------------------------------
    | If optimizeImages is set tu true, action to optimize images will be available under contextualMenu.
    | Images will be also optimized by method upload
    | False by default
    |--------------------------------------------------------------------------
    |
    */
    'optimizeImages' => false,

    /*
    |--------------------------------------------------------------------------
    | Path for pngquant. This is used to auto optimize png files. If set to null, FileManager will not optimize png files.
    | You must install pngquant in your host. https://pngquant.org
    | Must have optimizeImages option set to true
    | Null by default
    |--------------------------------------------------------------------------
    |
    */
    'pngquantPath'  => null,

    /*
    |--------------------------------------------------------------------------
    | Path for pngquant. This is used to auto optimize jpg files. If set to null, FileManager will not optimize jpg files.
    | You must install JPEG Archive in your host. https://github.com/danielgtaylor/jpeg-archive
    | Must have optimizeImages option set to true
    | Null by default
    |--------------------------------------------------------------------------
    |
    */
    'jpegRecompressPath'  => null,

);
```

You can see your new FileManager. Default to: `assets`.

### Dialog (Modal) version

FileManager has also a dialog or modal version.

[How to use dialog as file selector](dialog.md)


### More Screenshots

![screenshot-2](https://cloud.githubusercontent.com/assets/74367/15646186/a05dfe2a-265c-11e6-8374-0e6673b23508.png)

![screenshot-3](https://cloud.githubusercontent.com/assets/74367/15646188/a0964168-265c-11e6-86fb-b17c9e781c28.png)

![screenshot-4](https://cloud.githubusercontent.com/assets/74367/15646187/a07894a6-265c-11e6-84b3-ff4b7cac3203.png)

![screenshot-5](https://cloud.githubusercontent.com/assets/74367/15646185/a03df24c-265c-11e6-9b0e-349bebd5d241.png)

![screenshot-6](https://raw.githubusercontent.com/dandisy/filemanager/master/screenshot/filemanager-cropper.png)



### ToDo

 * Better docs

### Thanks
* Daniel Morales: [dmuploader][1]
* SWIS: [contextMenu][2]
* Nils Plaschke: [Chumper/Zipper] [3]

---- 
License: MIT




[1]:	https://github.com/danielm/uploader
[2]:	https://github.com/swisnl/jQuery-contextMenu
[3]:    https://github.com/Chumper/Zipper
