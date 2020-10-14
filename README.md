Text Field Formatters
=================

The Custom Formatters module allows users to select three Text Field Formatters.

## 🚀 Features

* Three formatter types:
    * **ROT13**  
      Implement formatters by Rotating text character by 13.

    * **Slugify**  
      Add Slug in text.

    * **Tooltip**  
      Add tooltip on text.


## 🌍 How To Use

### Dependencies
------------
- [Libraries API 2.x](http://drupal.org/project/libraries)
- [Slugify](https://packagist.org/packages/cocur/slugify)
- [qTip2](https://github.com/qTip2/qTip2)

### Tasks
------------
1. Download the qTip2 library from
https://github.com/qTip2/qTip2

2. Unzip the file and rename the folder to "qTip2" (pay attention to the
case of the letters)
3. Put the folder in one of the following places relative to drupal root.
    - libraries
    - profiles/PROFILE-NAME/libraries
    - sites/all/libraries
    - sites/SITE-NAME/libraries
4. The following files are required (last file is required for javascript
debugging)
    - jquery.qtip.min.js
    - jquery.qtip.min.css
5. Ensure you have a valid path similar to this one for all files
    - Ex: libraries/qTip2/dist/jquery.qtip.min.js

6. Adding following line at end of returning array in file vendor/composer/autoload_psr4.php
    - 'Cocur\\Slugify\\' => array($vendorDir . '/cocur/slugify/src'),

### Composer
------------
Composer may be used to download the library as follows...

1. Open a command line terminal and navigate to the same directory as your
composer.json file and run
  `
    composer require cocur/slugify
  `

## 📃 License

This project is under the MIT license. See the [LICENSE](https://github.com/viniciumedeiros/bankon/blob/master/LICENSE) for details.

🎓 Made with by Vinícius Medeiros 👨🏻‍💻 [Get in touch!](https://www.linkedin.com/in/viniciumedeiros/)