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
                        <h4><label for="textarea" class="form-label">เริ่ม</label></h4>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <textarea name="start" class="form-control" id="textarea" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="mb-2 row">
                        <div class="col-2">
                            <h4><label for="textarea" class="form-label">จบ</label></h4>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <textarea name="end" class="form-control" id="textarea" rows="2"></textarea>
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

        $start = isset($_POST['start']) ? $_POST['start'] : 0;
        $end = isset($_POST['end']) ? $_POST['end'] : 0;
        ?>
        <h5>เริ่ม : <?php echo $start ?></h5>
        <h5>จบ : <?php echo $end ?></h5>
        <?php
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                $a = "เลขคู่";
            } else {
                $a = "เลขคี่";
            }
            echo "เลข $i ";
            echo $a,"<br>";
        }
        ?>
    </div>
</body>

</html>