<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Data Product - FastPrint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name', $product->name) }}"
                                    placeholder="Input Name Product" />

                                <!-- error message for name -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ old('price', $product->price) }}"
                                    placeholder="Input Price Product" />

                                <!-- error message for price -->
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id">
                                    <option value="">
                                        Select Category
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($category->id == $product->category_id) selected @endif>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- error message for category -->
                            @error('category_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <select class="form-control @error('status_id') is-invalid @enderror" name="status_id">
                                    <option value="">Select Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}"
                                            @if ($status->id == $product->status_id) selected @endif>
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- error message for status -->
                            @error('status_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <button type="submit" class="btn btn-md btn-primary">
                                UPDATE
                            </button>
                            <button type="reset" class="btn btn-md btn-warning">
                                RESET
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>
