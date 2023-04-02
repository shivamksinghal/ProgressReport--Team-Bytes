<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .clr{
      background-color: rgb(162, 163, 163);
      color: black;
    }
    .bdr{
      border: 2px solid black;
      border-box-sizing: 10vw;
    }
    .ab{
      /* margin-top: 20px; */
      /* padding: 20px; */
      /* border:2px solid black; */
    }
    .container{
      /* padding-top: 20px;*/
      margin-top: 20px; 
      /* padding-left:20px; */
      min-height: 100vh;
      width: 100vw;
       /* overflow-x: hidden; */
      display: flex;
      flex-direction: row;
      width: 100%;
      flex-basis: 25%;
      flex-wrap: wrap;
      
    }
    div.relative{
      position: relative;
      width: auto;
      height: auto;
      border: 2px solid black;
      color: black;
      background-color: rgb(160, 222, 201);
    }
    
    </style>
</head>

<body>

  <div class="container col-md-3">
 
    <form action="submit.php" method="post" id="form" enctype="multipart/form-data">
      <div class="relative col-md-8">
        <h1>&nbsp;&nbsp;<b>Form</b></h1>
        <div class="col-md-9" >
          <input type="file" class="form-control" id="file" name="file" required="required">
        </div>
        
        <!-- <div class="col-md-12">
          <textarea type="textarea" class="form-control" id="textdesc" name="desc" required="required"></textarea>
        </div> -->
        
        
        <br><br>

      <div class="col-sm-3 col-md-6 col-lg-4 " >
       
        
        <div>
          <label for="Sno"><b>Sno:</b></label>
          <input placeholder="enter Sno" type="text" name="Sno" required>
        </div>
        <div>
          <label for="org"><b>organisation:</b></label>
          <input placeholder="enter organisation" type="text" name="org"  required="required">
        </div>
        
        <div>
          <label for="Name"><b>Name:</b></label>
          <input placeholder="enter name" type="text" name="Name"  required="required">
        </div>
        
        <div>
          <label for="Phone"><b>Phone:</b></label>
          <input placeholder="enter 10 digits" type="text" name="Phone" size="10" pattern="[0-9]{10}" required>
        </div>
        
        <div>
          <label for="whatsapp_number"><b>whatsapp number:</b></label>
          <input placeholder=" enter 10 digits" type="text" name="whatsapp_number" size="10" pattern="[0-9]{10}" required>
        </div>
        
        <div>
          <label for="dest"><b>destination:</b></label>
          <input placeholder="enter destination" type="text" name="dest" required>
        </div>
        <div>
          <label for="availability"><b>availability:</b></label>
          <input placeholder="availability" type="text" name="availability" required>
        </div>
        <div>
          <label for="types"><b>types:</b></label>
          <input placeholder="types" type="text" name="types" required>
        </div>
        <div>
          <label for="referrer"><b>referrer:</b></label>
          <input placeholder="enter referrer" type="text" name="referrer" required>
        </div>
        <div>
          <label for="first_contacted"><b>first contacted:</b></label>
          <input placeholder="....." type="text" name="first_contacted" required>
        </div>
        <div>
          <label for="who_contacted"><b>who contacted:</b></label>
          <input placeholder="....." type="text" name="who_contacted" required>
        </div>
        <div>
          <label for="email_1"><b>email 1:</b></label>
          <input placeholder="enter email" type="text" name="email_1" required>
        </div>
        <div>
          <label for="email_2"><b>email 2:</b></label>
          <input placeholder="enter email" type="text" name="email_2" required>
        </div>
        <div>
          <label for="residence"><b>residence:</b></label>
          <input placeholder="enter residence" type="text" name="residence" required>
        </div>
        <div>
          <label for="notes"><b>notes:</b></label>
          <input placeholder="type notes" type="text" name="notes" required>
        </div>
        <br>

        <div class="col-md-3">

          <button type="submit" class="btn btn-success btn-lg" id="submit">Upload</button>
        </div>
      </div>
    </div>

      <div>

        <input type="hidden" class="form-control" id="textid" name="bid" required="required" value="<?php

      if (isset($_GET['bid'])) {
        echo $_GET['bid'];
      } else {
        echo "others";
      }

      ?>">
      </div>


      <div id="download" style="text-align: right">

      </div>
    </form>
    <br><br>
    <div class="a col-sm-3 col-md-6 col-lg-4">
    <table class="table table-striped clr">
      <thead>
        <tr>
    
          <th>File name</th>
          <!-- <th>Description</th> -->
          <th>bid</th>
          <th>Date</th>
          <th>Sno</th>
          <th>organisation</th>
          <th>Name</th>
          <th>Phone</th>
          <th>whatsapp_number</th>
          <th>dest</th>
          <th>availability</th>
          <th>types</th>
          <th>referrer</th>
          <th>first_contacted</th>
          <th>who_contacted</th>
          <th>email_1</th>
          <th>email_2</th>
          <th>residence</th>
          <th>notes</th>
          <!--<th>Download</th>-->
        </tr>


      </thead>
      <tbody>
        <?php
      $data = file_get_contents("data.json");
      $arr = json_decode($data, true);
      for ($i = count($arr) - 1; $i >= 0; $i--) {

        if ($arr[$i]['bid'] == $_GET['bid']) {
      ?>

        <tr>
          <td>
            <?php echo $arr[$i]['file']; ?>
          </td>

          <!-- <td>
            <?php echo $arr[$i]['desc']; ?>
          </td> -->
          <td>
            <?php echo $arr[$i]['bid']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['date']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['Sno']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['org']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['Name']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['Phone']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['whatsapp_number']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['dest']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['availability']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['types']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['referrer']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['first_contacted']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['who_contacted']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['email_1']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['email_2']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['residence']; ?>
          </td>
          <td>
            <?php echo $arr[$i]['notes']; ?>
          </td>
          <td>
            <!--<a href="files/<?php //echo $arr[$i]['file']; ?>" class="btn btn-primary" download>DOWNLOAD</a>--></td>
      </tr>
        </div>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function(){
   
     $("form#form").on('submit',function(e) {
          e.preventDefault();
          $.ajax({
                 url: "submit.php",
           type: "POST",
           data:  new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           beforeSend : function()
           {
             
            $("#submit").text('uploading....');
           },
           success: function(data)
              {
                if(data=='invalid')
                {
                    console.log('errror');
                }else{
                  //console.log(data);
                  $("#submit").text('Successfully Upload');
                  window.location.reload(true);
                }
              }
            });
        });
    });
</script>
</body>
</html>