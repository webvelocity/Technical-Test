<img src="https://fullcomms.co.uk/wp-content/uploads/2017/09/logo.png">
<h1>Fullcomms Developer Technical Test (Note: I did not have much time becuase of work, I hope you can see my skill)</h1>

<h3>Introduction</h2>
<p>Welcome to the Fullcomms developer tech test!</p>
<p>My build process used the following tools to speed up development and keep my design
consistent:
 </p>
 
###Tools
01. [LavarelMix](https://github.com/JeffreyWay/laravel-mix)
02. [Blueprint](https://github.com/laravel-shift/blueprint)
03. [Bootstrap](https://github.com/twbs/bootstrap)
04. [CSS Variables](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties)
 
 ### Install
 01. `git clone  https://github.com/webvelocity/Technical-Test.git`
 02. `cd Technical-Test`
 03. `composer install`
 04. `npm install`

 05. `cp .env.example .env`
 05. `php artisan key:generate`
 06. `php artisan migrate`
 07. `php artisan db:seed`
 08. `php artisan storage:link`
 09. `php artisan serve`

###Folder Structure

 * Models:
    * Post.php
    * Property.php
    * User.php

 * Controllers:
    * Post.php
    * Property.php
    * User.php

 * Views: 
    * index.php
    * partials
        * header
        * propertyCard
        * latestNews
        * sharedOwners
        * footer
        
 <small>I split the small components just to simplify my visual code layout of the home page)</small>
