<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Resizer</title>
    <link rel="stylesheet" href="main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <form>
            <div class="row d-flex align-items-center">
                <div class="col-lg-7">
                    <fieldset class="upload_dropZone text-center mb-3 p-4">
                        <legend class="visually-hidden">Image uploader</legend>

                        <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                            <use href="#icon-imageUpload"></use>
                        </svg>

                        <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><i>or</i></p>

                        <input id="upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                        <label class="btn btn-upload mb-3" for="upload_image_background">Choose file(s)</label>

                        <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                    </fieldset>
                </div>

                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <span>Width:</span>
                            <input type="number" placeholder="WIDTH" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <span>Height:</span>
                            <input type="number" placeholder="HEIGHT" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <button class="btn btn-success w-100">Resize</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <svg style="display:none">
        <defs>
            <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z" />
            </symbol>
        </defs>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>