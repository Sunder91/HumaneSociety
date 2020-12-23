  <?php>
  include('connect.php');
 $sql = "SELECT DogName, DogBio, DogPic, GoodwDogs, GoodwCats, GoodwKids FROM dogs";
 $result = mysqli_query($conn, $sql);

  function dogInfo (linkTarget) { //when clicked this will open more info and pics on animals.  Want this to load from database with php.  Use this/that function?
    dogPics = window.open ("", "", "width=800,height=600");
    dogPics.moveTo(400,50);
    dogPics.document.write("<link id='theme' href='MainTemplate.css' rel='stylesheet' type='text/css'");
    dogPics.document.writeln("<div class='header'><h4>Humane Society of Polk County Logo Here</br>Non-Profit/Non-Kill animal shelter</h4></div>");
    dogPics.document.writeln("<h3><center><?php echo $row[DogName]; ?></center></h3>");
    dogPics.document.writeln("<div class='sidebar1'>Age: 3-4 years </br>Price: $160</br>Good with children: Unknown</br>Good with other dogs: Yes</br>Good with Cats:  No</div>");
    dogPics.document.writeln("<div class='midbody'><div class='gallery'><img src='Images/Shadow4.jpg' alt='Shadow' width='300' height='300'></div></div>");
    dogPics.document.writeln("<div class='sidebar2'></br>About Me:  I am a good boy that loves treats.  I love to play fetch and go for walks.  If you want a dog that loves nothing more than to cuddle with you I am your dog!</div>");
  }
  
  <?>

/*    This is how it was set up before changes to css on 12-20-2020
  var dogPics;
  function dogInfo (linkTarget) { //when clicked this will open more info and pics on animals.  Want this to load from database with php.  Use this/that function?
    dogPics = window.open ("", "", "width=800,height=600");
    dogPics.moveTo(400,50);
    dogPics.document.write("<link href='FunctionTemplate.css' rel='stylesheet' type='text/css'");
    dogPics.document.writeln("<div class='top'><h4>Humane Society of Polk County Logo Here</br>Non-Profit/Non-Kill animal shelter</h4></div>");
    dogPics.document.writeln("<h3><center>Shadow</center></h3>");
    dogPics.document.writeln("<div class='lsidebar'>Age: 3-4 years </br>Price: $160</br>Good with children: Unknown</br>Good with other dogs: Yes</br>Good with Cats:  No</div>");
    dogPics.document.writeln("<div class='nwanimalspotlight'><img src='Images/Shadow4.jpg' alt='Shadow' width='300' height='300'></div>");
    dogPics.document.writeln("</br>About Me:  I am a good boy that loves treats.  I love to play fetch and go for walks.  If you want a dog that loves nothing more than to cuddle with you I am your dog!");
  }
  */