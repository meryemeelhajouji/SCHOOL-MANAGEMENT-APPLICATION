### BUILDING SCHOOL MANAGEMENT APPLICATION USING PHP - MYSQL ( OPP - PDO - MVC)

### 1 - BUILDING CUSTOM MVC FRAMEWORK

        1 - PUBLIC = The Frontend of our Application

              - css
              - js
              - images
              - index.php => The Application starting file
              - .htaccess => Redirect non-existing URLs To public/index.php

        2 - APP = The MVC Structure of our Application

            2 - 1 - libraries

                    - Core.php       => Look at The URL and decided what controller or method should be loaded
                    - Controller.php =>  Helps To load models and views from other controllers
                    - Database.php   => Contains methods to connect and perform CRUD operations on The database

            2 - 2 - controllers
            2 - 3 - models
            2 - 4 - views
            2 - 5 - config => Contains database parametres
            2 - 6 - require.php => Require all libraries and necessary files That our application needs
            2 - 7 - .htaccess  => Prevent users To access The app directory

        3 - .htacces => Get rid of "public" in The URL

### 2 - BUILDING SCHOOL MANAGEMENT APPLICATION USING MVC

        2 - 1 - controllers

              - Students.php
              - Teachers.php
              - Parents.php
              - Admins.php

        2 - 2 - models

              - Student.php
              - Teacher.php
              - Parent.php
              - Admin.php

        2 - 4 - views
              - students
              - teachers
              - parents
              - admins
