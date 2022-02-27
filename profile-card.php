<?php

    include_once('functions.php');
    $artistdata = new DB_con();
    $user = new artist();
    

?>

<html>
    <head>
        <title>Profile Card</title>
        <link rel="stylesheet" href="color.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    </head>
    <body>
        <header>
            <center><a href="#" class="logo">FANCLUB</a></center>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" class="active" >Artist</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </header>
        <section>
            <div>
                <img src="image/cloud.png" id="clouds">
            </div>
            <div class="student-profile py-4">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent text-center">
                            <?php
                            $sql = $user->getUserInfo(1);
                            $row = mysqli_fetch_array($sql)
                            ?>
                                <?php echo '<img class="profile_img" src="data:image/png;base64,'. base64_encode($row['pic_soloartist']).'" alt="student dp">'; ?>
                                <h3><?php echo '', $row['name_soloartist']; ?></h3>
                                <h6><?php echo 'สังกัด ', $row['affiliation_soloartist']; ?></h6>
                                <div class="col-12">
                                <button type="button" class="btn btn-primary"> <a href="/FANCLUB01/FanclubEvent/profile.php?ID_artist=<?php echo $row['ID_artist'];?> " class="text-light">รายละเอียด</a></button>
                                </div>
                            </div>
                            
                            
                        </div>
                    
                    </div>
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-header bg-transparent text-center">
                            <?php
                            $sql = $user->getUserInfo(2);
                            $row = mysqli_fetch_array($sql)
                            ?>
                                <?php echo '<img class="profile_img" src="data:image/png;base64,'. base64_encode($row['pic_soloartist']).'" alt="student dp">'; ?>
                                <h3><?php echo '', $row['name_soloartist']; ?></h3>
                                <h6><?php echo 'สังกัด ', $row['affiliation_soloartist']; ?></h6>
                                <div class="col-12" href="/FANCLUB01/FanclubEvent/profile.php" >
                                <button type="button" class="btn btn-primary"> <a href="/FANCLUB01/FanclubEvent/profile.php?ID_artist=<?php echo $row['ID_artist'];?> " class="text-light">รายละเอียด</a></button>
                                    
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                    
                    </div>

                    
                    
                </div>
            </div>
        </section>
    </body>
    <?php
                
            
        
    ?>
</html>
