<?php require_once 'core/dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    //$stmt = $pdo->prepare("SELECT * FROM doctors); // used to prepare and connect to the database and get and data

    //if ($stmt->execute()) { //execute the prepared statement
      //  echo "<pre>"; //pre statement is used fot the format 
      //  print_r($stmt->fetchAll()); //get all the rows and return  
      //  echo "<pre>";
    //}
    



    //$stmt = $pdo->prepare("SELECT * FROM appointments 
                                //WHERE appointment_id = 3"); // used to prepare and connect to the database and get and data

    //if ($stmt->execute()) { //execute the prepared statement
        //echo "<pre>"; //pre statement is used fot the format 
       // print_r($stmt->fetch()); //get a single row 
        //echo "<pre>";
    //}

    //inserting new record to the database
  //  $query = "INSERT INTO doctors (doctor_id, first_name, last_name, specialty, contact_number)
                      //  VALUES (?,?,?,?,?)"; //the columns where we will put the data
    
   // $stmt = $pdo->prepare($query);

   // $executeQuery = $stmt->execute(
    //    [9, "Yuan", "Algo", "Surgeon", 666-5555] // the data that will be inserted
   // );

    //if($executeQuery){
    //    echo"Query successful"; // check if query is successful
    //}
    //else {
     //   echo"Query failed"; // check if query failed
   // }

    //$query = "DELETE FROM doctors WHERE doctor_id = 1"; // selecting the target data that will be deleted
    //$stmt = $pdo->prepare($query); //preparing the query

    //$executeQuery = $stmt->execute(); //execute the query

    //if ($executeQuery){
    //    echo "Deleted Successfully"; // check if successful
    //}
    //else {
    //    echo "Query Failed"; // check if failed
   // }

  // $query = "UPDATE doctors SET first_name = ?, last_name = ? WHERE doctor_id = 9";
   
  // $stmt = $pdo->prepare($query);

   //$executeQuery = $stmt->execute(
   // ["Gemfel", "Ortiz"]
   //);

   //if($executeQuery){
   // echo"Update successful!";
  // }
   //else {
   // echo"Update failed!";
   //}

    $query = "SELECT first_name, last_name FROM doctors WHERE doctor_id BETWEEN 4 AND 8";

    $stmt = $pdo->prepare($query);
    $executeQuery = $stmt->execute();

    if($executeQuery){
        $doctorsId = $stmt->fetchAll();
    }
    else{
        echo"Query failed!";
    }
    
    ?>
    <table>
        <tr>
            <th>First_Name</th>
            <th>Last_Nanme</th>
        </tr>
        <?php foreach($doctorsId as $row){ ?>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
        </tr>
        <?php } ?>
</body>
</html>