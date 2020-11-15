<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mealform.css"> 
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>
<div class="nurtritionist-dashboard">
    <?php include('nav.php'); ?>
        <div class="content">
            <div class="row">
                <div class="col-2">
                    <div class="meal-form form-container">
                        <h2 style="text-transform: capitalize;">Client Details</h2><br>
                        <form class="form" action="" method="post">
                            <div class="form-group">
                                <label>Client Name</label>
                                    <input class="form-control" type="text" name="foodName" size="50"
                                        value="" placeholder="Sajana Nakandala" disabled><br>
                                <label>Age</label>
                                    <input class="form-control" type="number" name="calories" size="50"
                                            value="" placeholder="21" disabled><br>
                                <label>Height(m)</label>                                        
                                    <input class="form-control" type="number"  name="protein" size="50"
                                                value="" placeholder="1.828" disabled><br>
                                <label>Weight(kg)</label>                                        
                                    <input class="form-control" type="number" name="protein" size="50"
                                                value="" placeholder="73" disabled><br>
                                <label>BMI</label>
                                    <input class="form-control" type="number"  name="fat" size="50"
                                            value="" placeholder="20.9" disabled><br>
                                <label>Physical Exercise level</label>
                                    <input class="form-control" type="number"  name="fat" size="50"
                                            value="" placeholder="Active" disabled><br>
                                <label>Diet Preference</label>
                                    <input class="form-control" type="number"  name="fat" size="50"
                                            value="" placeholder="Anything" disabled><br>                               
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <div class="meal-form form-container">
                        <h2 style="text-transform: capitalize;">Meal Plan Details</h2><br>
                        <form class="form" action="" method="post">
                            <div class="form-group">
                                <label>Meal Plan Name</label>
                                    <input class="form-control" type="text" name="foodName" size="50"
                                        value="" autocomplete="off" placeholder="Enter Meal Plan Name Here" required><br>
                                <label>Breakfast</label>
                                    <textarea class="form-control"></textarea><br>
                                <label>Lunch</label>
                                    <textarea class="form-control"></textarea><br>
                                <label>Dinner</label>
                                    <textarea class="form-control"></textarea><br>
                                <label>Snacks</label>
                                    <textarea class="form-control"></textarea><br>                                    
                            </div>
                            <input class="button" type="submit" name='submit2' value="Send" size="25">
                            <input class="button" type="reset" value="reset" size="25">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('foot.php'); ?>
</body>

</html>