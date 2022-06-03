<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
<body>
    <nav class="navbar navbar-default">
    </nav>
    <div class="col-md-12 well">
        <h3 class="text-primary text-center">Display Data in php</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="d-flex">
        <div class="col-md-6">
            <form method="POST" action="insert.php">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" required="required"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" required="required"/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" required="required"/>
                </div>
                <center><button class="btn btn-primary" name="insert">Insert</button></center>
            </form>
        </div>	
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <thead class="alert-info">
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                </thead>
                <tbody>
                    <?php
                        $data = file_get_contents('members.json');
                        $data = json_decode($data);
                        foreach($data as $fetch){
                    ?>
                        <tr>
                            <td><?php echo $fetch->firstname?></td>
                            <td><?php echo $fetch->lastname?></td>
                            <td><?php echo $fetch->address?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>	
        </div>
    </div>
</body>
</html>