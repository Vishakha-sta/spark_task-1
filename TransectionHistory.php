<?php include 'header.php'; ?>
    <div class="customer">
    <h1>Transaction History</h1>
    <?php
        include 'db.php';
        $sql = "SELECT * FROM `transaction`";
        $result = mysqli_query($conn , $sql);

        if($result -> num_rows > 0 ){
            $count = 1;
     
            echo '<center>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                        <th>Date & Time</th>
                    </tr>';
                       
            while($row = $result->fetch_assoc()){
                ?>
                   <tr>
                        <td><?php echo $count;?> </td>
                        <td><?php echo $row['sender'];?></td>
                        <td><?php echo $row['receiver'];?></td>
                        <td><?php echo $row['balance'];?></td>
                        <td><?php echo $row['datetime'];?></td>
                        
                    </tr>
                    <?php  
                        $count+=1; 
            }
             
            echo "
                </table>
            </center>";
            }
            else echo "<h1>No records has been inserted yet!!</h1>";
        ?>
    
    <div class="space" >
    </div>
</div>

<?php  include 'footer.php'; ?>