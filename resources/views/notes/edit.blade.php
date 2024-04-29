<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-danger py-3 text-center">
                    <h1 class="mb-0 text-white">Editar Nota</h1>
                </header>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                
                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" value="{{ $note->title }}">
                        </div>
                        <div>
                            <label for="content">Content:</label>
                            <textarea name="content" id="content" cols="30" rows="10">{{ $note->content }}</textarea>
                        </div>
                        <div>
                            <label for="category">Category:</label>
                            <input type="text" name="category" id="category" value="{{ $note->category }}">
                        </div>
                        <button type="submit">Update Note</button>
                    </form>
                                    

            </div>
        </div>
    </div>

</body>
</html>