
<body>

  <?php require 'navbar.php'; ?>

 
  

  <div class="main-content-project">
  <div class="title">
      CHALLENGE ACCEPTED
    </div>

    
      <section class="explication-project">
<p>
Challenge Accepted is an application that simulates a "truth or dare" game. In this application, there are two 
types of users: the player and the administrator. Players can log in to add new participants and select the category
 they want to play in. They are then presented with random “truth” and “dare” questions. Each time you accept a question,
  you add 100 points, and a list with the accumulated point count is displayed. On the other hand, the administrator has 
  the ability to add new categories as well as new "truth" and "dare" questions. Additionally, before logging in, the
   administrator can review a suggestion box to decide whether to implement the proposals received. 
<br>
<br>
The database created
    for the operation of the application includes several tables that store information about categories, game content,
     suggestions, users and user types, point classification, among others, to ensure the correct operation and security
      of the application.
        </p>
      </section>
    

    <div class="video-container">
      <video controls>
        <source src="../img/challenge-accepted.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    </div>


</body>

<?php require 'back.php'; ?>

</html>
