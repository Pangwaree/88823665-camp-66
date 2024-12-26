<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel=" stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<div class="container mt-3">
        <form method="post" action="">
                <div class="container mt-3">
                    <div class="mb-2 row">
                        <div class="col-2">
                            <h4><label for="textarea" class="form-label">สูตรคูณ</label></h4>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <textarea name="detail" class="form-control" id="textarea" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
        </form>
    </div>
    
        <div class="container mt-5">
        <?php
        $detail = isset($_POST['detail']) ? $_POST['detail'] : 0;
        ?>
        <h5>สูตรคูณ : <?php echo $detail ?></h5>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "$detail x $i = ",($detail * $i),"<br>";
        }
        ?>
    </div>
</body>

</html>