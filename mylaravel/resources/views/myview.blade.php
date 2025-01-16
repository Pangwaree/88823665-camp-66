<!DOCTYPE html>
<html>
<head>
    <title>สูตรคูณ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-3">
        <h1>สูตรคูณ</h1>

        <form method="POST" action="{{url('/mycontroller')}}">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">เลขที่ต้องการคูณ:</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-primary">คำนวณ</button>
        </form>

        @if(isset($multiplication_table))
            <h2>สูตรคูณ : {{ $number }}</h2>
            <ul class="list-group">
                @foreach($multiplication_table as $i => $result)
                    <li class="list-group-item">{{ $number }} x {{ $i + 1 }} = {{ $result }}</li>
                @endforeach
            </ul>
        @endif
    </div>


</body>
</html>
