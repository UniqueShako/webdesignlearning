<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>Hello Web Design!</title>
                <link rel="stylesheet" type="text/css" href="styles.css"/>
                <script type="text/javascript">
                  function changeIt() {let changeMe = document.getElementById("changeMe"); changeMe.innerHTML = "This was changed with Javascript!";}
                </script>

        </head>
        <body>
                <h1 id="helloWorldPhp"><?php $hello = "Hello World"; function say_hello() {global $hello; echo $hello;} say_hello();?></h1>
                <form method="POST">
                        <input type="text" name="name">Enter your name</input>
                        <input type="submit" value="Say Hello!" id="submitButton"></input>
                </form>
                <div id="helloUser"><?php $name = $_POST['name']; if (! (strlen($name) == 0)) {echo 'Hello ' . $name . '!';}?></div>
                <p id="javaExplanation">The following text is added to the page using Javascript. This text is styled using an external CSS sheet.</p><br>
                <script type="text/javascript">document.write("This text is added via Javascript using the <strong>DOM!</strong>")</script>
                <!--<script type="text/javascript">alert("This alert is generated client side with Javascript.")</script>-->
                <br>
                <p id="changeMe" onclick="changeIt()">Click to change me!</p>
                <br>
                <p>First person in our data file: <?php $xmlFile = "data.xml"; $xmlName = simplexml_load_file($xmlFile); echo $xmlName->person[0]->name;?></p>
                <br>
                <p>Second person in our data file: <?php echo $xmlName->person[1]->name;?></p>
        </body>
</html>
