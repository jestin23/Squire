// SQL linking code

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Squire_UoP"; //setting variables

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //connects to the database with the name and password set in the variables
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    // SQL statment using the PHP of the forms to go here... 

    // Return the results here in JSON.
    }

      catch(PDOException $e)
      {
        echo $sql . "<br>" . $e->getMessage();
      } // If not database is found and exception is thrown. 

      $conn = null; //sets connection to null and ends the connection
      ?>
