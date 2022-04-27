## BUILDING SCHOOL MANAGEMENT APPLICATION USING PHP-MYSQL ( OPP - PDO - MVC)

### 1 - BUILDING CUSTOM MVC FRAMEWORK

        1 - PUBLIC

              - css
              - js
              - images
              - index.php => The Application starting file
              - .htaccess => Redirect non-existing URLs To public/index.php

        2 - APP

            2 - 1 - libraries

                    - Core.php       => Load The current controller based on The URL
                    - Controller.php =>
                    - Database.php   =>

            2 - 2 - controllers
            2 - 3 - models
            2 - 4 - views
            2 - 5 - config
            2 - 6 - require.php
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
