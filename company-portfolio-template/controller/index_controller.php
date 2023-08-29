<?php
require_once("database/mysql.php");

$page_content_query = "SELECT * FROM `page_content` WHERE  `page_name` = 'index_page'";

$result = $conn->query($page_content_query);
$contents = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //insert row data into contents and set content_title as the key
    $contents[$row['content_title']] = $row['content'];
  }
}

$features_query = "SELECT * FROM `features`";

$result = $conn->query($features_query);
$features = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //insert row data into features array
    array_push($features, [
        'icon' => $row['icon_classname'],
        'feature_title' => $row['feature_title'],
        'description' => $row['description']
    ]);
  }
}

$classes_query = "SELECT * FROM `class`";

$result = $conn->query($classes_query);
$classes = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //insert row data into classes array
    array_push($classes, [
        'class_id' => $row['id'],
        'class_name' => $row['class_name'],
        'class_image' => $row['class_image_directory'],
        'class_description' => $row['class_description'],
        'total_seats' => $row['total_seats'],
        'available_seats' => $row['available_seats'],
        'class_time' => $row['class_time'],
        'tution_fee' => $row['tution_fee'],
        'age_range' => $row['age_range']
    ]);
  }
}

//check if booking form submitted. if it does. store data
if(isset($_POST['client_name'])){
    //get form data and set to variables
    $client_name = $_POST['client_name'];
    $client_email = $_POST['client_email'];
    $class_id = $_POST['class_id'];
    //query to insert data to class_booking table
    $class_booking_query = "INSERT INTO `class_booking` (`client_name`, `client_email`, `class_id`) Values ('" .$client_name ."','" .$client_email ."'," .$class_id .")";
    //perform the insert action
    $result = mysqli_query($conn, $class_booking_query);

    if (! $result) {
        //if cannot perform insert data, show error
        $result = mysqli_error($conn);
        echo $result;
    }else{
        //if successfull, check from classes array to change the available seats count
        foreach($classes as $key=>$class){
            if($class['class_id'] == $class_id){ //check if the class id equal to class id in classes array
                
                $new_available_seat = $class['available_seats'] -1; //update new available seats
                $update_class_query = "UPDATE `class` SET `available_seats` = " .$new_available_seat ." WHERE `id` = " .$class_id; //query to update the class table 
                if ($conn->query($update_class_query) === TRUE) {
                    //if update data to database successful, update the data to the classes array
                    $classes[$key]['available_seats'] = $new_available_seat;
                }else{
                    //show  error in console.log if the action is unsuccessful
                    echo '<script>console.log("Error booking a class")</script>';
                } 
            }
        }
    }
}

$conn->close();
?>