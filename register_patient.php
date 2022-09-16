<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>


<?php 
 

 include("php/database.php");
if (isset($_POST['send'])) {
  # code...
$two=$_POST['two'];
$_SESSION['two']=$two;
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
$fname=$_POST['fname'];
$fname=$_POST['fname'];
$fname=$_POST['fname'];
$sql1="INSERT into adultdata(mrn,date_reg,namee,fname,gfname,sex,date_birth,age,region,subcity,katena,kebele,house_number,phone,allid) values('$mrn','$date_reg','$name','$fname','$gfname','$sex','$date_birth','$age','$region','$subcity','$katena','$kebele','$house_number','$phone','$two')";
  $query=mysqli_query($con,$sql1);

}



    ?> 
    <?php     
      // code...
      if (isset($_POST['submit'])) {
        // code...
      
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
       

    

        if(!empty($mrn)&&!empty($date_reg)&&!empty($name)&&!empty($fname)&&!empty($gfname)&&!empty($sex)&&!empty($date_birth)&&!empty($age)&&!empty($region)&&!empty($kebele)&&!empty($subcity)&&!empty($katena)&&!empty($phone)&&!empty($house_number)){  

          $data_cecker=mysqli_query($con,"SELECT * FROM patientdata WHERE name='kasahun'AND fname='kasahun'");
          if(mysqli_fetch_row($data_cecker)>0){
            echo"there is some data";
          }
       
          
        
          
          
       
          else{
            $sql="INSERT into patientdata(mrn,date_reg,name,fname,gfname,sex,date_birth,age,region,subcity,katena,kebele,house_number,phone) values('$mrn',' $date_reg',' $name','$fname','$gfname','$sex','$date_birth',' $age','$region','$subcity',' $katena','$kebele','$house_number','$phone')";
            $query=mysqli_query($con,$sql);
          }
            
 

          }

          else{
            ?>
            <script>alert("please All fildes Are Required");</script>
            <?php
          }
        }
  
       
    
    ?>





    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="" method="post">
   <header>
        <img src="image/wculogo.png" alt="">
        <h3>WCU HOSPITAL</h3>
        <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="#">About</a></li>
         <li><a href="#">contacts</a></li>
          <div class="button">
             <!-- <button id="login"> -->

             <button id="register" style="width: 150px; "><a style="text-decoration: none; color:white;" href="php/viewall_patient_data.php">View all patient data</a></button>
          </div>
            <div class="menu"><img src="image/menu.png" id="menu" ></div>
        </ul>



</div>

             <!-- </button> -->
         
    
       
    
      </header>

   <div class="search_div">
   <input type="search" name="search" id="search" placeholder="Search...">
   <input class="btn" type="submit" name="searchbt" value="Search">
   </div>

    <div class="container">

<div class="mainbody">
    <div class="MRN">
        <div class="Mrn_name">
        <label >MEDICAL RECORD NUMBER</label>
        <input type="text" name="mrn" id="" placeholder="መለያ ቁጥር">
        <label for="">DATE OF REGISTERATION</label><input type="date" name="date_reg" id="" placeholder="የተመዘገበበት ቀን" >
      
          
            <label for="">NAME</label>
            <input type="text" name="name" placeholder="ስም" >

   
           <label for="" id="labelname">FATHER NAME</label>
            <input type="text" name="fname" id="" placeholder="የአባትስም">
     
        
    
        <label for="">GRAND FATHER NAME</label>
        <input type="text" name="gfname" id=""placeholder="የአያትስም">
      
    </div>
    <div class="sex"> 
        <div class="sex_info">
        <label for="">SEX</label>
        <label for="" >male</label>
        <input type="radio" name="sex" id="sex" value="male">
        <label for="">female</label>
        <input type="radio" name="sex" id="sex" value="female">
    </div>
    <div class="DEATEINFO">
        <label for="">Date of Birth</label>
        <input type="date" name="date_birth" id=""  placeholder="">
          <label for="">AGE</label>       <input type="number" name="age" id="" placeholder="እድሜ">
</div>
    
      
    </div>
       </div>
     <div class="add_info">
       <div class="ADDRESS">
        <label for="">REGION</label>
        <input type="text" name="region" placeholder="ክልል" id="">
        <label for="">WOREDA</label>
        <input type="text" placeholder="ወረዳ" name="subcity" id="">
        <label for="">GOTT</label>
        <input type="text" placeholder="ጎጥ" name="katena" id="">
        <label for="">KEBELE</label>
        <input type="text" placeholder="ቀበሌ" name="kebele" id="">
        <label for="">HOUSE NUMBER</label>
        <input type="text" placeholder="ቤት ቁጥር" name="house_number" id="">
        <label for="">PHONE</label>
        <input type="text" name="phone" placeholder="ስልክ ቁጥር" id="">
       </div>

       <div class="infodata">
       <?php 
   
   if (isset($_POST['searchbt'])) {
     
    
  $data=$_POST['search'];

$sql="SELECT * from patientdata  where mrn='$data' or name='$data' or date_reg='$data' ";
$query=mysqli_query($con,$sql);

   

while ($row=mysqli_fetch_assoc($query)) {
   
     // // code...
     // if ($query_count=mysqli_num_rows($query)) {
     //     // code...
    
     ?>
     <div>
       <center>Patient Information</center>
          <table>
           <tr>
            <td>MRN</td>
            <td><input type="text" name="mrn" value="<?php echo $row['mrn']  ;?>" readonly></td>
           </tr>
           <tr>
            <td>Date of REGISTERATION</td>
            <td><input type="text" name="date_reg" value="<?php echo $row['date_reg'];?>"readonly></td>
           </tr>
<tr> 

<td>First Name</td>
<td>
<input type="text" name="name" value="<?php echo $row['name'];?>"readonly>
</td>
</tr>
<tr>
  <td>
Father Name
</td>
<td>
<input type="text" name="fname" value="<?php  echo$row['fname'] ;?>"readonly>
</td>
</tr>
<td>
Grand Fathr Name
</td>
<td>
<input type="text" name="gfname" value="<?php  echo$row['gfname'] ;?>"readonly>
</td>
</tr>

<tr>
<td>
Sex
</td>
<td>
<input type="text" name="sex" value="<?php echo $row['sex']  ;?>"readonly>
</td>
</tr>


<tr>
<td>
Date of Birth
</td>
<td>
<input type="text" name="date_birth" value="<?php echo $row['date_birth']  ;?>"readonly>
</td>
</tr>

<tr>
<td>
Age
</td>
<td>
<input type="text" name="age" value="<?php echo $row['age']  ;?>"readonly>
</td>
</tr>
<tr>
<td>
Region
</td>
<td>
<input type="text" name="region" value="<?php echo $row['region']  ;?>"readonly>
</td>
</tr>
<tr>
<td>
Woreda/Subcity
</td>
<td>
<input type="text" name="subcity" value="<?php echo $row['subcity']  ;?>"readonly>
</td>
</tr>
<tr>
<td>
Gott
</td>
<td>
<input type="text" name="katena" value="<?php echo $row['katena'];?>"readonly>
</td>
</tr>
<tr>
<td>
kebele
</td>
<td>
<input type="text" name="kebele" value="<?php echo $row['kebele']  ;?>"readonly>
</td>
</tr>

<tr>
<td>
House Number
</td>
<td>
<input type="text" name="house_number" value="<?php echo $row['house_number']  ;?>"readonly>
</td>
</tr>
<tr>
<td>
Phone
</td>
<td>
<input type="text" name="phone" value="<?php echo $row['phone']  ;?>"readonly>
</td>
</tr>
<form method="post">
    <select name="two">
            <option value="">none</option>
              <?php 

       $sql="SELECT *from allroom";
       $query=mysqli_query($con,$sql);
       while ($row=mysqli_fetch_assoc($query)) {
         // code...
              if ($row['username']=='opd1') {
                // code...
              
              ?>
      <option value="<?php echo $row['allid'] ;?>">Child</option>
           
           <?php
         }
           elseif ($row['username']=='pedatric1') {
             // code...
           
           ?> 
            <option value="<?php echo $row['allid'] ;?>">Adult</option>

           <?php
         }
           }
         ?>
    </select>
<input type="submit" name="send" value="Send">

</form>

          </table>
          <?php 
}
}
         
?>
     </div>
     </div>
    <div class="btn_submit">
           <input type="submit" name="submit" value="Register">

       </div>
    </div>
</div>

    </div>


   </form>


    
    <div class="footer">
        <div class="l_footer"></div>
     <div class="r_footer">
         <p>+25190002332</p>
         <P>NigistEline12@gmail.com</P>
         <p>HOSSANA ETHIOPIA</p>
         <p>&#169 All Right is reserved</p></div>
      </div>
     <script>
        
       $("#menu").click(function(){
         $("#l_bar").slideToggle("fast");
       });
       $("#menu").hover(function(){
       $(this).css({left: '70px'});
     });
     </script>
     <script src="javascript/cism.js"></script>
</body>
</html>
