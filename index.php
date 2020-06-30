<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <div class="form_block">
                <form method="post" action="action.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" class="form-control" placeholder="Code">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="data_block">
                <table class="table table-small">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //could be autoload
                        require_once "Database.php";

                        $database = new Database();
                        $all_data = $database->getAllRecords();

                        while ($row = mysqli_fetch_assoc($all_data)) {
                            //iterate over all the fields
                            echo "<tr>";
                            foreach ($row as $key => $val) {
                                //generate output
                                echo "<td>" . $val . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>