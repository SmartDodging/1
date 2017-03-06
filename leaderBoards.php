<?php 
    include("data.php");
    include ('connect_dp.php');
    $conn = dblogin();
    echo "
        <center>
            <h1>The LeaderBoards</h1>
            <p>These Are The Best Players In Tha World Biatch!!!</p>
                <table class='pens' method=''>
                    <tr>
                        <th>Username</th>
                        <th>Highest Score</th>
                        <th>Games Played</th>
                        <th>Puzzles Solved</th>
                        <th>Deaths</th>
                    </tr>
                    <tr>
                        <td>pens</td>
                        <td>pens</td>
                        <td>pens</td>
                        <td>pens</td>
                        <td>pens</td>
                    </tr>
                </table>
            </center>   
         ";
        $sql = "SELECT `userId`, `username`, `highScore`, `gamesPlayed`, `puzzlesSolved`, `deaths`, `username`
               FROM   `userDetails`";
       $result = mysqli_query($conn, $sql);
?>
 