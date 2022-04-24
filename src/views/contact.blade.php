<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Form</title>
</head>

<body>
    <div class="container p-lg-5">
        <div class="row text-center px-lg-5 mx-lg-5">
            <div class="col-lg-12">
                <h1>Contact Us Any Time</h1>
            </div>
        </div>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="row text-center px-lg-5 mx-lg-5">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Aditya Ricki" name="name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="email@sk.com" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
