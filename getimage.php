<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/getimage.css" media="screen" rel="stylesheet" type="text/css">

</head>

<body>

    <main>

        <form class="box" method="post" action="" enctype="multipart/form-data">
            <div class="box__input">
                <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                <label for="file">
                    <strong>Choose a file</strong>
                    <span class="box__dragndrop"> or drag it here</span>.
                </label>
                <button class="box__button" type="submit">Upload</button>
            </div>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success">Done!</div>
            <div class="box__error">Error! <span></span>.</div>
        </form>

    </main>

</body>

</html>