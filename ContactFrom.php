<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal website</title>
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <div class="main">
    <img src="textmsg.png" class="side-image" alt="Side image"> 
     <div class="contactform"> 
        <h1>Contact me for work</h1>
        <form method="POST" action="contact.php">
          <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input type="text" name="name" class="name">
            </div>

            <div class="mb-3">
              <label for="clientemail" class="email">Email address</label>
              <input type="name" name="email" class="formcontrol" id="clientemail" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email & phone with anyone else.</div>
            </div>

            <div class="mb-3">
              <label for="clientphone" class="phone">Phone</label>
              <input type="Phone" name="phone" class="formcontrol" id="clientphone">
            </div>
            <div class="mb-3">
              <label for="enquiry" class="formlabel">Enquiry</label>
              <input type="enquiry" name="formLabel" class="formcontrol">
            </div>

            <div class="mb-3" id="formcheck">
              <input type="checkbox" name="formCheckInput" class="formcheckinput" id="isclient">
              <label class="formchecklabel" for="isclient">I want you to work on a with me project</label>
            </div>
            <button type="submit" class="btn">Submit</button>
          </form>
     </div>
    </div>
        
</div>
</body>
</html>