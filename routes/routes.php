<?php
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:25 PM
 */
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
class routes
{
    public static function getRoutes()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
       
        $route = new route();
        $route->http_method = 'GET';
        $route->page = 'homepage';
        $route->action = 'show';
        $route->controller = 'homepageController';
        $route->method = 'show';
      
        $routes[] = $route;
       
=======
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading
        //I also use object for the route because it has data and it's easier to access.
        $route = new route();
        //this is the index.php route for GET
        //Specify the request method
        $route->http_method = 'GET';
        //specify the page.  index.php?page=index.  (controller name / method called
        $route->page = 'homepage';
        //specify the action that is in the URL to trigger this route index.php?page=index&action=show
        $route->action = 'show';
        //specify the name of the controller class that will contain the functions that deal with the requests
        $route->controller = 'homepageController';
        //specify the name of the method that is called, the method should be the same as the action
        $route->method = 'show';
        //this adds the route to the routes array.
        $routes[] = $route;
        //this is the index.php route for POST
        //This is an examole of the post for index
<<<<<<< HEAD
=======
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;
<<<<<<< HEAD
        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show
=======
<<<<<<< HEAD
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;
        
=======
        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;
<<<<<<< HEAD
        //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
        //you need to add routes for create, edit, and delete
        //GET METHOD index.php?page=tasks&action=all
=======
<<<<<<< HEAD
       
=======
        //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
        //you need to add routes for create, edit, and delete
        //GET METHOD index.php?page=tasks&action=all
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
<<<<<<< HEAD
        //GET METHOD index.php?page=accounts&action=all
        /*$route = new route();
=======
<<<<<<< HEAD
       
        $route = new route();
        $route->http_method = 'POST';
=======
        //GET METHOD index.php?page=accounts&action=all
//https://web.njit.edu/~kwilliam/mvc/index.php?page=accounts&action=all
        $route = new route();
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
<<<<<<< HEAD
        $routes[] = $route;*/
        //GET METHOD index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
=======
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;
<<<<<<< HEAD
        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login
=======
<<<<<<< HEAD
   
=======
        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
<<<<<<< HEAD
        //YOU WILL NEED TO ADD MORE ROUTES
=======
<<<<<<< HEAD
        
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;
<<<<<<< HEAD
        //return $routes;
        
        // adding for update
=======
        
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;
<<<<<<< HEAD
        
        //adding for create
=======

>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
        
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'delete';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'delete';
         $routes[] = $route;
 
         $route = new route();
         $route->http_method = 'GET';
         $route->action = 'edit';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'edit';
         $routes[] = $route;
 
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'save';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'save';
         $routes[] = $route;
 
         $route = new route();
         $route->http_method = 'GET';
         $route->action = 'register';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'register';
         $routes[] = $route;
 
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'store';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'store';
<<<<<<< HEAD
=======
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'edit';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'edit';
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
         
         $routes[] = $route;
 
        return $routes;
    }
}
<<<<<<< HEAD
//this is the route prototype object  you would make a factory to return this
=======
=======
        //YOU WILL NEED TO ADD MORE ROUTES
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';
        $routes[] = $route;
        //this is the route for the reg form
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;
        //this handles the reg post to create the user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;
        return $routes;
    }
    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
    }
}
//this is the route prototype object  you would make a factory to return this
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
<<<<<<< HEAD
}
?>
=======
<<<<<<< HEAD
}
?>
=======
}
>>>>>>> a26d8aa1ca885606943db36fd48a0677f3bb0d6c
>>>>>>> 61b1682803b2c8566a516671034a0860c342938e
