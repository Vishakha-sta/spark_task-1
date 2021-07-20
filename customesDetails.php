<?php include 'header.php'; ?>
    <div class="customer">
    <h1>Transfer Money</h1>
    <?php
        include 'db.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn , $sql);

        if($result -> num_rows > 0 ){
            $count = 1;
     
            echo '<center>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Operation</th>
                    </tr>';
                       
            while($row = $result->fetch_assoc()){
                ?>
                   <tr>
                        <td><?php echo $count;?> </td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['balance'];?></td>
                        <td><a href="transaction.php?id=<?php echo $row['id'];?>"><span class="transact"><button >Tranction</button></span></a></td>
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