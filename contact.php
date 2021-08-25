  <html>
  <head>
  
     
 <style>

 body {
  font-family: Arial, Helvetica, sans-serif;}
form
{
  width: 100%;
  margin-left: 350px;
}
 

.container
{
   
  border:3px solid #f1f1f1 ;

}
 input[type=text], input[type=password],input[type=number],input[type=email],input[type=date],input[type=textarea] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 25px;
}

button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
 
  border-radius: 25px;
}

button:hover {
  opacity: 0.8;
}
</style>

  </head>
    <body>
      
 
    <div class="form-wrapper"> <!-- Form-wrapper only for positioning -->
      <form action="addfeedback.php" method="post"style="margin-left: 500px ; width:300px">

        <h2 align="center" style="background-color:#263aed;padding: 25px;color:white;width:100%">Contact Us</h2>
        
        <div class="row">
          <label for="Username"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter Username" name="Username" pattern="[A-Za-z]+" required >
    <br>
    <label for="lastname"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter Lastname" name="lastname" pattern="[A-Za-z]+" required>
    <br>

    <label for="emailaddress"><b>Email Address</b></label><br>
    <input type="email" placeholder="Enter Email" name="emailaddress" required>
    <br>
    <br>
    <label for="date"><b>Date</b></label><br>
    <input type="date" placeholder="Enter Date" name="date" required>
         
         
         <br>
    <label for="city"><b>City</b></label><br>
    <input type="text" placeholder="Enter City" name="city" required>
        <div class="row">
           
           
           <label for="feedback"><b>feedback</b></label><br>
          <!--  <textarea id="write" name="write" rows="4" cols="40">Write your Feedback -->
              <input type="textarea" placeholder="Write your Feedback" name="feedback" required>
   .
  </textarea>
                
        </div>
           
        
        <button type="submit"  >Submit</button>
    <br>
       
      </form>
    </div>

    
  </body>
 

 </html>



 
