<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Product - FastPrint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div style="display: flex">
                            <div style="flex: 1; font-weight:bold; font-size:14px">Product Name</div>
                            <div style="flex: 1">
                                {{ $product->name }}
                            </div>
                        </div>

                        <div style="display: flex">
                            <div style="flex: 1; font-weight:bold; font-size:14px">Product Price</div>
                            <div style="flex: 1">
                                {{ $product->price }}
                            </div>
                        </div>

                        <div style="display: flex">
                            <div style="flex: 1; font-weight:bold; font-size:14px">Product Category</div>
                            <div style="flex: 1">
                                {{ $product->category->name }}
                            </div>
                        </div>

                        <div style="display: flex">
                            <div style="flex: 1; font-weight:bold; font-size:14px">Product Status</div>
                            <div style="flex: 1">
                                {{ $product->status->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
