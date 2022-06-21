<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- Stylesheet -->
    <title>Hey Buddy!</title>
</head>
<body>
    <div class="wrapper">
        <!-- Left Side-->
        <div class="left">
            <div class="title pt-2">
                <h1>Hey Buddy!</h1>
            </div>
            <div class="image">
                <img class="dog" src="img/main-dog.jpg" alt="main dog">
            </div>
        </div>

        <!-- Right Side-->
        <div class="right ps-4">
            <div class="home">
                <a href="/"><button type="button" class="btn btn-light float-end me-4 mt-4">Home</button></a>
            </div>
            <!-- INPUT -->

                
                <!-- Enter Dog Into MySQL Database -->
                <div class="text-center mt-5 mb-5">
                    <h3 class="mx-5">Input Into Database</h3>
                    <p>Enter dog into database</p>
                    <form name="dogsearch" method="POST" action="../inputdog/doginput.php" enctype="multipart/form-data">
                        <!-- Name Input -->
                        <input class="my-2" type="text" name="name" placeholder=" Name"><br>
                        <!-- Breed Input -->
                        <input class="my-2" type="text" name="breed" placeholder=" Breed"><br>
                        <!-- Age Input -->
                        <input class="my-2" type="text" name="age" placeholder=" Age"><br>
                        <!-- Gender Input -->
                        <select name="gender">
                            <option value=""> GENDER </option>
                            <option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
                        </select>
                        <!-- Image Input -->
                        <input type="hidden" name="size" value="1000000">
                        <div class="file mt-4 mb-2">
                          <input type="file" name="image">
                        </div>
                        <!-- Dog Bio Input -->
                        <div class="description">
                          <textarea class="focus:outline-black" id="text" cols="42" rows="4" name="image_text" placeholder=" Description of dog"></textarea>
                        </div>

                        <!-- Submit Form Button --> 
                        <input type="submit" name="submit-input" value="Submit" class="btn btn-primary mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/app.js"></script>
</body>
</html>