<?php

    require "db.php";
    
    $fetch_q = "select *from customer";
    $rows = $con->query($fetch_q);
    
    if($con-> affected_rows > 0){
        ?>
        <div class="table-responsive-sm container-sm  card-body card">
            <h2 class="text-center"><u>Transfer Money</u></h2>
            <table class="table table-hover text-primary">
                <tr>
                    <th>Name</th>
                    <th>Balance</th>
                    <th>Action</th>
                </tr>
                
                <?php 
                while($row = $rows ->fetch_assoc()){ ?>
                <tr class="text-dark">
                    <td><?php echo $row['cname']; ?></td>                    
                    <td><?php echo $row['balance']; ?></td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transferModal" data-email="<?php echo $row['email'];?>">Transfer</button></td>
                </tr>
                <?php
                } ?>            
            </table>
        </div>

        <!-- Transfer Money -->
        <div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transferModalLabel">Transfer Balance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="transfer_process.php" method="post">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">From:</label>
                            <input type="text" name="sender" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <select name="receiver" class="form-select">
                            <?php
                            $rows = $con->query($fetch_q);
                            while($row = $rows ->fetch_assoc()){ ?>
                                <option value="<?php echo $row['email']; ?>"> <?php echo $row['cname']; ?></option>
                            <?php
                            } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Enter Amount to Transfer" min="1" name="trans_amt" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="transfer">Transfer</button>
                        </div>
                    </form>
                </div>                
                </div>
            </div>
        </div>
        <script>
            var transferModal = document.getElementById('transferModal');
            transferModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var email = button.getAttribute('data-email')
            var from = transferModal.querySelector('.modal-title')
            var modalBodyInput = transferModal.querySelector('.modal-body input')            
            modalBodyInput.value = email;
            })
        </script>
        <?php
    }else{
        ?>
        <h4 class="text-danger text-center mt-5">Opps !! Bank don't have any customer yet :(</h4>
        <?php
    }


?>