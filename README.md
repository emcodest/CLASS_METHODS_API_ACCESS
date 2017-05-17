# CLASS_METHODS_API_ACCESS
THIS CLASS CAN EXPOSE ALL THE CLASS METHODS OVER RESTFUL API ACCESS 

EXAMPLE USAGE

STEP ONE:
CREATE AN INSTANCE OR OBJECT OF THE CLASS OR EXTEND IT IN YOUR APPLICATION
STEP TWO:
a. SPECIFY AN ACTION KEY EQUALS THE METHOD NAME IN YOUR POST OR GET PARAMETERS
b. IF THE METHOD NEEDS AN ARGUEMENT ALSO SPECIFY IT IN THE POST OR GET REQUEST PARAMETER
WITH EXACTLY THESAME ARGUMENT VARIABLE NAMES USED IN DESIGNING THE METHOD

FOR EXAMPLE LETS SAY WE HAVE A CLASS CLASS ANIMALS WE NEED TO ACCESS ALL THE METHOD VIA API
class Animal extends CLASS_METHODS_API_ACCESS
{
  function __construct()
  {
    parent::__construct();
  }
  public function getOwner($owner_id, $password)
  {
  //: whatever code
  echo $owner_id, $password;
  
  }
  public function bark($vol)
  {
  echo $vol;
  }
  public function sleep()
  {
  echo "just wanna sleep";
  
  }
}
new Animal(); //instance of the animal class

Lets access the getOwner, bark, sleep function via $_GET or $_POST
http://url.com/animal.php?action=getOwner=yes&owner_id=123&password=234
http://url.com/animal.php?action=bark&vol=200
http://url.com/animal.php?action=sleep

