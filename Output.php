<?php
   $title = $_POST['title'];
   $CODE = $_POST["code"];
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Code2Screenshot</title>
   <link rel="stylesheet" type="text/css" href="prettify-small/prettify.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <script type="text/javascript" src="prettify-small/prettify.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
   <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js??lang=css&amp;skin=Sons-Of-Obsidian"></script>

    <!-- Include from the CDN -->
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js" integrity="sha512-wUa0ktp10dgVVhWdRVfcUO4vHS0ryT42WOEcXjVVF2+2rcYBKTY7Yx7JCEzjWgPV+rj2EDUr8TwsoWF6IoIOPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js" integrity="sha512-V/C9Axb8EEL4ix79ERIJmpRd6Mp1rWVSxa2PIBCdCxqhEsfCBWp/R0xJ4U495czhcuDWrGOFYo8+QI3lJ9DK5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container-fluid">
       <a class="navbar-brand" href="index.html">Code2Screenshot </a>
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item"><a class="btn btn-light" href="https://github.com/QuantumByteStudios/Code2Screenshot">GitHub</a></li>
         </ul>
     </div>
    </nav>
   <br>

</head>
<body>

<div class="container-fluid">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
       const download = () => {
          html2canvas(document.querySelector('#capture')).then(canvas => {
             document.body.appendChild(canvas);
          });
       }
       function successMessage() {
            document.getElementById("success").innerHTML += 
              "<div class='alert alert-primary' role='alert'>Right Click and Download your Screenshot!</div>";
        }
    </script>

    <div id='capture'>
       
          <div class="container-fluid">
             <?php echo "<h3>$title</h3>"; ?>
             <div class="row">
                <div class="col-12">
                    <code>
                        <pre  style="padding: 25px;" class="prettyprint">
                            <?php 
                                echo "\n";
                                echo htmlspecialchars_decode($CODE); 
                                echo "\n//Screenshot Generated form Code2Screenshot";
                            ?>
                        </pre>
                    </code>
                </div>      
             </div>
          </div>
         
    </div>

    <button class="btn btn-primary" onclick="download(), successMessage()">Get Screenshot!</button>  
    <br><br>
    <div id="success">
        
    </div>
    
</div>          


</body>
</html>