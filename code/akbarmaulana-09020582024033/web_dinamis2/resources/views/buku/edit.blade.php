<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_buku">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">JUDUL</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $buku->judul) }}" placeholder="Masukkan Judul Buku">

                                    @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="font-weight-bold">ISI</label>
                                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" placeholder="Masukkan Konten Buku">{{ old('isi', $buku->isi) }}</textarea>

                                    @error('isi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>


<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}"></script>
  <script src="{{ asset('toastr/toastr.min.css') }}"></script>

<script>
   ClassicEditor
   .create( document.querySelector( '#isi' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>