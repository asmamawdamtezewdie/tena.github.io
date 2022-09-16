<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
          @import url(../style2.css);
          form{
               display: block;
               margin-left: 10px;

          }
          table tr td label{
               font-size: 20px;
               color: white;


          }
          table tr td input{
               width:50%;
               height: 30px;
               background-color :aliceblue;
               padding-left: 5px;
               font-size: 20px;
          }
          .sendbtn{
               margin-left: 18%;
               border: none;
               outline: none;
               width: 60%;
               height: 60px;
               background: rgb(8, 126, 236);
               color: white;
               font-size: 30px;
               border-radius: 5px;
          }
          .sendbtn:hover{
                     border: 1px solid rgb(8, 126, 236) ;
                     color: rgb(8, 126, 236);
                     background: #fff;
          } 
     </style>
     <script src="../jquery.js
     "></script>
	<title></title>
</head>
<?php 

include("database.php");
$allid=$_SESSION['allid'];
if (isset($_POST['submit'])) {
     // code...
extract($_POST);
$sql="INSERT into opd_room_urindata(pname,age,sex,MRN,ward,bedno,datebirth,mobile,patientaddress,orderby,date,specimin,site,diagno,samcollby,initial,labserial,rbc,color,wbc,trans,wbcast,foam,rbccast,ph,waxy,blood,ephical,gravity,parasite,albu,bacteria,gluco,yeast,keton,crystals,doneby,appby,logdate,allid) values('$pname','$age','$sex','$mrn','$ward','$bedno','$datebirth','$tel','$address','$orderby','$date','$specimen','$site','$diagno','$samcoll','$initial','$labserial','$rbc','$color','$wbc','$trans','$wbcast','$foam','$rbccast','$ph','$waxy','$blood','$ephical','$gravity','$parasite','$albu','$bacteria','$gluco','$yeast','$keton','$crystals','$doneby','$appby','$logdate','$allid')";
$query=mysqli_query($con,$sql);
}
?>
<body>


<header>
       <img src="image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
         <div class="button">
            <button id="login">Login</button>
            <a href="logout.php"><button id="register">logout</button></a>
         </div>
           <div class="menu"><img src="image/menu.png" id="menu" ></div>
       </ul>
   
      
   
     </header>
     <div class="menu_l">
        <div class="left_side_bar" id="l_bar">
            <ul>
    
              <li>Home</li>
              <li>Service</li>
              <li>Seting</li>
              <li>Contacts</li>
              <li>About</li>
              <li>helps</li>
            </ul>
    
         </div>
     </div>


 <div>

     <form action="#" method="post">
          <center style="font-size: 40px; color:white;">
               Parasitology form 
          </center>
          <table>
         <tr>
         <td> <label>Patient Name</label>
          <input type="text" name="pname"></td>

          <td>   <label>Age</label>
          <input type="number" name="age">  </td>
               
          <td>
          <label>Sex</label>
          <select name="sex">
               <option value="male">Male</option>
               <option value="female">Female</option>
          </select>
          </td>
     <td>
     <label>MRN</label>
           <input type="text" name="mrn">
     </td>
           
     <td>
     <label>ward/OPD No</label>
           <input type="text" name="ward">
     </td>
     
         </tr>
         <tr>

         <td>
     <label>Bed No</label>
           <input type="number" name="bedno">
     </td>
              <td>
              <label>Date of birth</label>
           <input type="date" name="datebirth">
              </td>
              <td>
              <label>Tel</label>
           <input type="number" name="tel">
              </td>
              <td>
              <label>Patient Address</label>
            <input type="text" name="address">
              </td>
              <td>
              <label>Test Order By</label>
            <input type="text" name="orderby">

              </td>
              
         </tr>
<tr>
<td>
              <label>Date</label>
            <input type="date" name="date">
              </td>
              <td>
              <label>Type of Specimen</label>
            <input type="text" name="specimen">
              </td>

<td>
               <label>Type of Specimen</label>
            <input type="text" name="specimen">
               </td>
               <td>
               <label>Site Of Specimen Collected</label>
            <input type="text" name="site">
               </td>
               <td>
               <label>Clinical Diagnosis</label>
             <input type="text" name="diagno">
               </td>

</tr>
          </table>
          <div>
         <center>  <table > <tr>
                  <td><label>Sample Collected by</label></td>
                  <td><input type="text" name="samcoll"></td>
             </tr>
             <tr>
                  <td><label>Initial</label></td>
                  <td><input type="date" name="initial"></td>
             </tr>
             <tr>
                  <td>  <label>Lab Serial No</label></td>
                  <td> <input type="text" name="labserial"></td>
             </tr>
             </center>     
             </table>
        </div>

        <div>
         <table>
            <tr>
                 <th>Test</th>
                 <th>Result</th>
                 <th>Microscopy exam</th>
                 <th>Result</th>
            </tr>
                   <td>Physical Exam</td>
                   <td><input type="text" name="phyExam" id=""></td>
                   <td>RBC</td>

                   <td><input type="text" name="rbc"></td>
</tr>
<tr>
                         <td>Color</td>
                    <td><input type="text" name="color"></td>
             
                    <td>WBC</td>
                    <td><input type="text" name="wbc"></td>
</tr>
       <tr>
       <td>Transparency</td>
                    <td><input type="text" name="trans"></td>
                    <td>WBC Casts</td>
                    <td><input type="text" name="wbcast"></td>
       </tr>
       <tr>
                     <td>Foam and Others</td>
                    <td><input type="text" name="foam"></td>
                    <td>RBC Casts</td>
                    <td><input type="text" name="rbccast"></td>
       </tr>
       <tr>
       <td>Chemical Exam</td>
                    <td></td>
                    <td></td>
                    <td></td>

       </tr>
       <tr>
            
                   <td>PH</td>
                    <td><input type="text" name="ph"></td>
                    <td>Waxy Casts</td>
                    <td><input type="text" name="waxy"></td>
       </tr>
       <tr>
       <td>Blood</td>
                    <td><input type="text" name="blood"></td>
                    <td>Epithelial cells</td>
                    <td><input type="text" name="ephical"></td>
       </tr>

       <tr>
               
       <td>S/gravity</td>
                    <td><input type="text" name="gravity"></td>
                    <td>Parasite</td>
                    <td><input type="text" name="parasite"></td>
       </tr>
       <tr>
       <td>Albumin</td>
                    <td><input type="text" name="albu"></td>
                    <td>Bacteria</td>
                    <td><input type="text" name="bacteria"></td>
       </tr>
       <tr>
       <td>Glucose</td>
                    <td><input type="text" name="gluco"></td>
                    <td>Yeast</td>
                    <td><input type="text" name="yeast"></td>
       </tr>
       <tr>
       <td>Keton</td>
                    <td><input type="text" name="keton"></td>
                    <td>Crystals</td>
                    <td><input type="text" name="crystals"></td>
       </tr>
         </table>
        </div>

     <div>
          <table>
               <tr>
                    <td><label>Test Done By</label></td>
                    <td>
          <input type="text" name="doneby"></td>
          <td><label>Checked By</label></td>
          <td> <input type="text" name="appby"></td>
          <td><label>Specimen Logout</label></td>
          <td><input type="date" name="logdate"></td>
               </tr>
               

          </table>
          <input type="submit" name="submit"  class="sendbtn" value="Send">

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
</div>
</body>
</html>