<?php 
    include("data.php");
    include ('connect_dp.php');
    $connect = dblogin();


        $sql = "SELECT users.Username, userDetails.HighScore, userDetails.GamesPlayed, userDetails.Solved, userDetails.Deaths
        FROM Orders
        INNER JOIN userDetails
        ON users.Username=userDetails.Username;";
        $resultselect = mysqli_query($connect, $sql);
        $records = mysqli_fetch_assoc($resultselect);
        var_dump($records['Username']);
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
                        <td>".$records['Username']."</td>
                        <td>pens</td>
                        <td>pens</td>
                        <td>pens</td>
                        <td>pens</td>
                    </tr>
                </table>
            </center>   
         ";
?>
 