<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel=" stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<div class="container mt-3">
        <form method="post" action="">
                <div class="mb-3 row">
                    <div class="col-4">
                        <label for="nickname" class="form-label">ชื่อเล่น</label>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <textarea name="nickname" class="form-control" id="textarea" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="mb-3 row">
                        <div class="col-4">
                            <label for="textarea" class="form-label">สูตรคูณแม่</label>
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
        
        <h1>ชื่อเล่น : <?php echo isset(($_POST['nickname'])) ? $_POST['nickname'];"" ?></h1>
        <h1>สูตรคูณ : <?php echo isset(($_REQUEST['detail'])) ? $_REQUEST['detail'] : "" ?></h1>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "$detail x $i = ",($detail * $i);
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>