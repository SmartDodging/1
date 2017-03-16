<?php 
    include("data.php");
    include ('connect_dp.php');
    $connect = dblogin();
    $sql = "SELECT * FROM userDetails";
    mysqli_query($connect, $sql);
    $result = mysqli_query($connect, $sql);
    while ( $records = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
         { 
    echo "
        <center>
        <h1>The LeaderBoards</h1>
            <p>These Are The Best Players In Tha World Biatch!!!</p>
                <table class='pens'>
                <tr>
                        <th>Username</th>
                        <th>Highest Score</th>
                        <th>Games Played</th>
                        <th>Puzzles Solved</th>
                        <th>Deaths</th>
                    </tr>
                    <tr>
                        <td>".$records['Username']."</td>
                        <td>".$records['HighScore']."</td>
                        <td>".$records['GamesPlayed']."</td>
                        <td>".$records['Solved']."</td>
                        <td>".$records['Deaths']."</td>
                    </tr>
                </table>
            </center>   
         ";
         }
?>
  