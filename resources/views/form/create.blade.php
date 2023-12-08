<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row pt-3">
                <div class="col-8 m-auto vh-100">

                    <h4>insert data here:</h4>
                    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input required type="text" class="form-control" name="name" id="name"
                                placeholder="insert name" value="test" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input required type="text" class="form-control" name="surname" id="surname"
                                placeholder="insert surname" value="test" />
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input required type="email" class="form-control" name="email" id="email"
                                placeholder="insert email" value="test@test.it" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea required class="form-control" name="message" id="message" rows="3" placeholder="insert your message">test</textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="file" class="form-label">Choose file</label>
                            <input required type="file" class="form-control" name="file" id="file"
                                placeholder="select a file from your pc" />
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-check">
                            <input required class="form-check-input" type="checkbox" id="privacy" name="privacy" />
                            <label class="form-check-label" for="privacy"> Accept privacy condition </label>
                            @error('privacy')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </main>

</body>

</html>
