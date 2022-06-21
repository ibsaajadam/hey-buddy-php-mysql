<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
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
            <div class="input-into">
                <a href="input.php"><button type="button" class="btn btn-light float-end me-4 mt-4">Input Dog</button></a>
            </div>
            <!-- SEARCH -->
                <!-- Search API -->
            <div class="text-center mt-5 pt-5">
                <div class="search-api border-bottom">
                    <h3>Search Dog Breeds</h3>
                    <div class="dog-slides mb-5">
                        <div>
                          <div>Select a dog breed</div>
                          <br>
                          <div id="breed"></div>
                          <br>
                        </div>
                        <div class="show-dogs" id="slideshow">
                  
                        </div>
                    </div>
                </div>
                
                <!-- Search MySQL Database -->
                <div class="search-data mt-5 mb-5">
                    <h3>Search Our Database</h3>
                    <p>Enter a breed of dog</p>
                    <form name="dogsearch" method="POST" action="../searchdog/dogcheck.php" enctype="multipart/form-data">
                        <input type="text" name="search" placeholder=" Ex. Boxer"><br>
                        <input type="submit" name="submit-search" value="Let's Look!" class="btn btn-primary mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/app.js"></script>
</body>
</html>