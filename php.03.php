<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel=" stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>สูตรคูณ </h1>
        <h1>detail : <?php echo isset($_REQUEST['detail']) ? $_REQUEST['detail'] : "" ?></h1>
        <form method="post" action="">

            <div class="mb-3 row">
                <div class="col-4">
                    <label for="email" class="form-label">email</label>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>

            <div class="container mt-3">
                <div class="mb-3 row">
                    <div class="col-4">
                        <label for="textarea" class="form-label">textarea</label>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <textarea class="form-control" id="textarea" rows="4"></textarea>
                        </div>
                    </div>
                </div>

            </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
            
    </div>

    </form>
    </div>
</body>

</html>