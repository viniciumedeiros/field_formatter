<h4 align="center">
    Text Field Formatters
</h4>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/viniciumedeiros/field_formatter">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/viniciumedeiros/field_formatter">
	
  <a href="https://www.linkedin.com/in/viniciumedeiros/">
    <img alt="Made by Vinícius Medeiros" src="https://img.shields.io/badge/made%20by-viniciumedeiros-%2304D361">
  </a>
  
  <a href="https://github.com/viniciumedeiros/field_formatter/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/viniciumedeiros/field_formatter">
  </a>

  <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">
   <a href="https://github.com/viniciumedeiros/field_formatter/stargazers">
    <img alt="Stargazers" src="https://img.shields.io/github/stars/viniciumedeiros/field_formatter?style=social">
  </a>
</p>
<p align="center">
  <a href="#-project">Project</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-features">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-how-to-use">How to use</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-how-to-contribute">How to contribute</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-license">License</a>
</p>

## 💻 Project

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

## 👽 How to contribute

-  Make a fork;
-  Create a branck with your feature: `git checkout -b my-feature`;
-  Commit changes: `git commit -m 'feat: My new feature'`;
-  Make a push to your branch: `git push origin my-feature`.

After merging your receipt request to done, you can delete a branch from yours.

## 📃 License

This project is under the MIT license. See the [LICENSE](https://github.com/viniciumedeiros/field_formatter/blob/master/LICENSE) for details.

🎓 Made with by Vinícius Medeiros 👨🏻‍💻 [Get in touch!](https://www.linkedin.com/in/viniciumedeiros/)