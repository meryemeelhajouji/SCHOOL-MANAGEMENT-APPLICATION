### BUILDING SCHOOL MANAGEMENT APPLICATION USING PHP - MYSQL ( OPP - PDO - MVC)

---

#### 1 -MVC : Model View Controller = Software Architectual Design Pattern That we use to seperate The logic of The application from The UI

            1 - 1 - The Model      =  Interacts with database ( To perform CRUD operations ) and communicates with controllers
            1 - 2 - The View       =  The UI ( HTML - CSS ) / communicates with The controller and can ba passed dynamic data from controllers
            1 - 3 - The controller =  Process Browser Requests - Get Data from The model - Passes Data To The view

#### 2 - MVC Workflow

    - User => The URL ( www.app.com/users/get/1 ) =>  The Core Class => The Controller ( Method ) => ( The Model or The View or Both )
    - When we type This URL in The browser we tell The application to load users Controller and call The update method and we pass to it the parametre 1
    - The URL determines what Controller and method should be loaded
    - Example :

      class Users {

        public function get($id){
          $user = $this->userModel->get_user_by_id($id);
          $this->view('show',['post', $post]);
        }

      }

#### 3 - BUILDING CUSTOM MVC FRAMEWORK

        1 - PUBLIC = The Frontend of our Application

              - css
              - js
              - images
              - index.php => The Application starting file
              - .htaccess => Redirect non-existing URLs To public/index.php and allows us to use '/' in URL instead of '? url = '

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

### 5 - BUILDING SCHOOL MANAGEMENT APPLICATION USING MVC

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
