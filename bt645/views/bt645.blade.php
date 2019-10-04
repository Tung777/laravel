<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container">
        <form method="POST" action="{{ route('viewPost') }}">

            <div class="table-wrapper">
                <div class="form-group">
                    <label>Name Product</label>
                    <input type="text" name="sanpham" class="form-control" placeholder="Ten san pha,">
                </div>
                <div class="form-group">
                    <label>img Product</label>
                    <input type="text" name="anhsanpham" class="form-control" placeholder="Enter imgProduct">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input type="number" name="giasanpham" class="form-control" placeholder="Enter age">
                </div>

                <button class="btn btn-success">Add</button>
            </div>
        </form>
    </div>

</div>
</body>
</html>
