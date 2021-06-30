<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Calculator</title>
</head>
<body>
    <header class="container my-5">
        <h1 class="text-center text-info text-uppercase mx-6"> Simple Calculator</h1>
    </header>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <form>
                    <label for="num1" class="form-label text-success text-lg "> Enter a Number: </label>
                    <input class="form-control form-control-lg border border-success border-5 rounded-pill" type="text" name="num1" placeholder="Number 1" aria-label="Number 1" >
                    <div class="my-4">
                    <label for="operator text-info"> Pick an Operator </label>
                        <select class="form-select border border-success border-5 text-info" multiple name="operator">
                            <option class="text-center text-success display-6"> + </option>
                            <option class="text-center text-success display-6"> - </option>
                            <option class="text-center text-success display-6"> * </option>
                            <option class="text-center text-success display-6"> / </option>
                        </select>
                    </div>
                    <label for="num2" class="form-label text-success text-lg "> Enter a Number: </label>
                    <input class="form-control form-control-lg border border-success border-5 rounded-pill" type="text" name="num2" placeholder="Number 2" aria-label="Number 2">

                    <button class="btn btn-success mt-5 btn-lg" type="submit" name="submit" value="submit">
                        <span class="text-uppercase">Calculate</span>
                    </button>

                </form>
            </div>
        

            <div class="col-md-6 col-sm-12 mt-5">
                <h3 class="text-center text-success">The result is: 
                    <?php 

                        if (isset($_GET['submit'])) {
                            $num1 = $_GET['num1'];
                            $num2 = $_GET['num2'];
                            $operator = $_GET['operator'];
                            switch ($operator) {
                                case "+":
                                    echo $num1 + $num2;
                                break;
                                case "-":
                                    echo $num1 - $num2;
                                break;
                                case "*":
                                    echo $num1 * $num2;    
                                break;    
                                case "/":
                                    echo $num1 / $num2;
                                break;
                                default:
                                    echo "Check your enter values.";
                            }
                        }

                    ?>
                </h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
