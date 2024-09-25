<?php
  session_start();
  require_once('database.php');

  $contact_id = filter_input(INPUT_POST, 'contact_id', FILTER_VALIDATE_INT);

  // get the data from the form
  $first_name = filter_input(INPUT_POST, 'first_name');
  $last_name = filter_input(INPUT_POST, 'last_name');
  $email_address = filter_input(INPUT_POST, 'email_address');
  $phone_number = filter_input(INPUT_POST, 'phone_number');

  echo $first_name . "<br />";
  echo $last_name . "<br />";
  echo $email_address . "<br />";
  echo $phone_number . "<br />";

  
  // code to save to MySQL Database goes here
  // Validate inputs

  $queryContacts = 'SELECT * FROM contacts';
  $statement1 = $db->prepare($queryContacts);
  $statement1->execute();
  $contacts = $statement1->fetchAll();
  $statement1->closeCursor();

  foreach ($contacts as $contact)
  {
    if($email_address == $contact["emailAddress"] && contact_id != $contact["contactID"])
    {
      $_SESSION["add_error"] = "Invalid data, duplicate email address. Try again";
    
      $url = "error.php";
      header("Location: " . $url);
      die();
    }
  }

  if ($first_name == null || $last_name == null || 
      $email_address == null || $phone_number == null) 
    {
      $_SESSION["add_error"] = "Invalid contact data. Check all
        fields and try again";
    
      $url = "error.php";
      header("Location: " . $url);
      die();
    }
    else 
    {
      require_once('database.php');

      // Add the contact to the database
      $query = 'UPDATE contacts
          SET firstName = :firstName,
          lastName = :lastName,
          emailAddress = :emailAddress,
          phone = :phone
          WHERE contactID = :contactID';
      $statement = $db->prepare($query);
      $statement->bindValue(':contactID', $contact_id);
      $statement->bindValue(':firstName', $first_name);
      $statement->bindValue(':lastName', $last_name);
      $statement->bindValue(':emailAddress', $email_address);
      $statement->bindValue(':phone', $phone_number);

      $statement->execute();
      $statement->closeCursor();

    }
    $_SESSION["fullName"] = $first_name . " " . $last_name;

    // redirect to confirmation page

    $url = "update_confirmation.php";
    header("Location: " . $url);
    die();

?>