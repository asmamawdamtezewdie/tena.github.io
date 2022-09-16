
<html>
    <head>

    </head>
    <?php
    include("database.php");
   if (isset($_POST['submit'])) {
    # code...
    $mrn=$_POST['mrn'];
    $date_reg=$_POST['date_reg'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $gfname=$_POST['gfname'];
      $sex=$_POST['sex'];
    $date_birth=$_POST['date_birth'];
    $age=$_POST['age'];
    $region=$_POST['region'];
    $subcity=$_POST['subcity'];
    $katena=$_POST['katena'];
    $kebele=$_POST['kebele'];
    $house_number=$_POST['house_number'];
    $phone=$_POST['phone'];
    $sql="UPDATE patientdata SET mrn='$mrn',date_reg='$date_reg',name='$name',fname='$fname',gfname='$gfname',sex='$sex',date_birth='$date_birth',age='$age',region='$region',subcity='$subcity',katena='$katena',kebele='$kebele',house_number='$house_number',phone='$phone'";
    $query=mysqli_query($con,$sql);

   }
    ?>
<body>
    <?php
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $sql="SELECT *from patientdata where cardid='$id'";
    $query=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($query)) {
        # code...
        ?>
        <form method="post">
        <tr>
            <label>MEDICAL RECORDER NUMBER</label>
            <td><input type="text" name="mrn" value="<?php  echo $row['mrn']  ;?>"></td>
        </tr>

        <tr>
            <label>Date of registration</label>
            <td><input type="text" name="date_reg" value="<?php  echo $row['date_reg']  ;?>"></td>
        </tr>

        <tr>
            <label>Name</label>
            <td><input type="text" name="name" value="<?php  echo $row['name']  ;?>"></td>
        </tr>
        <tr>
            <label>Father Name</label>
            <td><input type="text" name="fname" value="<?php  echo $row['fname']  ;?>"></td>
        </tr>
        <tr>
            <label>Grand Father Name</label>
            <td><input type="text" name="gfname" value="<?php  echo $row['gfname']  ;?>"></td>
        </tr>
        <tr>
            <label>Sex</label>
            <td><input type="text" name="sex" value="<?php  echo $row['sex']  ;?>"></td>
        </tr>
        <tr>
            <label>Date of Birth</label>
            <td><input type="text" name="date_birth" value="<?php  echo $row['date_birth']  ;?>"></td>
        </tr>
        <tr>
            <label>Age</label>
            <td><input type="text" name="age" value="<?php  echo $row['age']  ;?>"></td>
        </tr>
        <tr>
            <label>Region</label>
            <td><input type="text" name="region" value="<?php  echo $row['region']  ;?>"></td>
        </tr>
        <tr>
            <label>Subcity</label>
            <td><input type="text" name="subcity" value="<?php  echo $row['subcity']  ;?>"></td>
        </tr>
        <tr>
            <label>Gott</label>
            <td><input type="text" name="katena" value="<?php  echo $row['katena']  ;?>"></td>
        </tr>
        <tr>
            <label>Kebele</label>
            <td><input type="text" name="kebele" value="<?php  echo $row['kebele']  ;?>"></td>
        </tr>
        <tr>
            <label>House Number</label>
            <td><input type="text" name="house_number" value="<?php  echo $row['house_number']  ;?>"></td>
        </tr>
        <tr>
            <label>Phone</label>
            <td><input type="text" name="phone" value="<?php  echo $row['phone']  ;?>"></td>
        </tr>
        <input type="submit" name="submit" value="Reset">
    </form>
        <?php
    }
}

?>
</body>
</html>