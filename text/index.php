<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add more field</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Select cars</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="action.php" method="post" id="add_form">
                            <div id="show_item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="product Name[]" class="form-control" placeholder="Item Name" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="text" name="product Price[]" class="form-control" placeholder="Item Price" required>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="cars">Choose a car:</label>
                                        <select name="cars" id="cars">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".add_item_btn").click(function(e) {
                e.preventDefault();
                $("#show_item").prepend(`<div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="product Name[]" class="form-control" 
                                        placeholder="Item Name" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="text" name="product Price[]" class="form-control" 
                                        placeholder="Item Price" required>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                    <label for="cars">Choose a car:</label>
                                        <select name="cars" id="cars">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-danger remove_item_btn">Remove</button>
                                    </div>
                                </div>`);
            });

            $(document).on('click', '.remove_item_btn', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            
            
        });
    </script>

</body>

</html>