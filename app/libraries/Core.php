<?php

// The Core Class =  Look at The URL and decide what controller or method should be loaded
//  Example :
// The URL FORMAT = www.application.com/controller/method/params = www.application.com/users/update/1
// The Core class call The update method inside The Usres class and we update user with id = 1 

class Core
{

  // 1 - Class Properties

  # Current Controller
  # Current Method
  # Params

  // 2 - Class Constructor ( Call The get_url method and decide what Controller should be loaded  )

  // 3 - get_url method ( Fetch The URL parameters and put them into an array )

}
