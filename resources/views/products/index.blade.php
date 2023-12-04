<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Data Products - FastPrint</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        />
    </head>
    <body style="background: lightgray">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <a
                                href="{{ route('products.create') }}"
                                class="btn btn-md btn-success mb-3"
                                >ADD PRODUCT</a
                            >

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->status->name }}</td>
                                        <td class="text-center">
                                            <form
                                                onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('products.destroy', $product->id) }}"
                                                method="POST"
                                            >
                                                <a
                                                    href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-sm btn-dark"
                                                    >SHOW</a
                                                >
                                                <a
                                                    href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-sm btn-primary"
                                                    >EDIT</a
                                                >
                                                @csrf @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-danger"
                                                >
                                                    HAPUS
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Product belum Tersedia.
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>

                            <div style="display: flex; justify-content: center">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            // Message with toastr
            @if(session()->has('success'))
                toastr.success('{!! addslashes(session('success')) !!}', 'BERHASIL!');
            @elseif(session()->has('error'))
                toastr.error('{!! addslashes(session('error')) !!}', 'GAGAL!');
            @endif
        </script>
    </body>
</html>
