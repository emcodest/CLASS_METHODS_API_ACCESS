<?php

       /*
       //: AUTHOR: EMANOVWE EMMANUEL J
       //: FEATURES
       * THIS CLASS CAN EXPOSE ALL THE CLASS METHODS OVER REST-FUL API ACCESS
       //: USES
       * It can be used to test your class methods individually
       * Third party api calls can directly call your class methods

      */

      class CLASS_METHODS_API_ACCESS
      {

         function __construct()
         {

         $this->requests();

         }
         public function requests()
         {

            if(isset($_REQUEST))
            {

            extract($_REQUEST);
            //: action key must be set in all req to get the op requested
            // params or args are sent in the $_REQUEST KEYS
            isset($action) or die("No action key is specified in the request");
            $methods = get_class_methods($this);
            foreach($methods as $key => $value)
            {
            if($value == $action)
            {
            //: get args if any
            $argument = array();
            $r = new ReflectionMethod($this, $action);
            $params = $r->getParameters();
            foreach ($params as $param)
            {
            //$param is an instance of ReflectionParameter
                array_push($argument, $_REQUEST[$param->getName()]);

            }
            $r->invokeArgs($this, $argument);

            }

            }

            }

         }
         //: sample methods
         public function login($username, $password)
         {
           echo $username, "  ", $password;
         }
         public function checkBalance()
         {
           echo "My balance is $7.00";

         }
         public function userHistory($userid)
         {
           echo "My user history with user id is ".$userid;
         }



      }
 
?>